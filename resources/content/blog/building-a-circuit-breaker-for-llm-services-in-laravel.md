---
title: "Building a Circuit Breaker for LLM Services in Laravel"
description: "Stop your Laravel queues from overwhelming when LLM services go down. Implement the circuit breaker pattern for automatic recovery and adaptive worker scaling."
published_at: "2025-01-21"
---

If you're integrating LLM services like OpenAI, Anthropic, or vLLM into your Laravel application, you've probably experienced the frustration of service outages. Your queue fills up with failed jobs, your workers keep hammering a dead service, and your application grinds to a halt.

Let me introduce you to the circuit breaker pattern - a design pattern that helps your application gracefully handle failures in external services, especially LLMs.

## What is a Circuit Breaker?

Think of a circuit breaker like the one in your home's electrical panel. When there's an electrical fault, the breaker trips and cuts power to prevent damage. Once the issue is resolved, you reset the breaker and power flows again.

In software, a circuit breaker monitors for failures. When failures exceed a threshold, the circuit "opens" and stops sending requests to the failing service. After a cooldown period, it allows a single probe request through. If that succeeds, the circuit closes and normal operation resumes.

The pattern has three core states:

- **Closed**: Normal operation. Requests flow through.
- **Open**: Service is down. Requests are blocked to prevent cascading failures.
- **Half-Open**: Testing recovery. A single probe request determines if the service is back.

![Circuit Breaker State Diagram](/images/blog/circuit-breaker/state-diagram.svg)

## Why LLM Services Need This

LLM services are particularly prone to outages. They're resource-intensive and can fail for various reasons: GPU memory exhaustion, model loading issues, network problems, or simply being overwhelmed with requests.

Without a circuit breaker, here's what happens when your LLM service goes down:

1. Jobs start failing with connection timeouts
2. Laravel's queue worker retries each job multiple times
3. Your queue backs up with thousands of failing jobs
4. Each retry hammers the already-struggling service
5. When the service recovers, it gets immediately overwhelmed again

With a circuit breaker, the pattern is much healthier:

1. A few jobs fail with connection timeouts
2. The circuit breaker trips after the threshold is reached
3. Workers stop processing LLM jobs entirely
4. After a backoff period, a lightweight probe checks if the service is back
5. If the probe succeeds, workers gradually spin back up

## The State Machine

Beyond the basic three states, a robust implementation includes extended states for handling repeated failures:

```php
enum CircuitBreakerState: string
{
    case Closed = 'closed';
    case Open = 'open';
    case HalfOpen = 'half_open';
    case OpenExtended = 'open_extended';
    case HalfOpenExtended = 'half_open_extended';

    public function isOpen(): bool
    {
        return in_array($this, [self::Open, self::OpenExtended], true);
    }

    public function allowsProcessing(): bool
    {
        return $this === self::Closed;
    }

    public function allowsProbe(): bool
    {
        return in_array($this, [self::HalfOpen, self::HalfOpenExtended], true);
    }
}
```

The extended states handle a common scenario: the service comes back briefly, the probe succeeds, but then fails again immediately. Instead of using the short initial backoff, the extended states use a longer backoff to give the service more time to stabilize.

## Configuration

Make your circuit breaker configurable so you can tune it for your specific use case:

```php
// config/llm.php
'circuit_breaker' => [
    // Number of failures within the window to trip the circuit
    'failure_threshold' => env('CIRCUIT_BREAKER_FAILURE_THRESHOLD', 3),

    // Rolling window (minutes) for counting failures
    'failure_window_minutes' => env('CIRCUIT_BREAKER_FAILURE_WINDOW', 5),

    // Wait time (minutes) after circuit opens before first probe
    'initial_backoff_minutes' => env('CIRCUIT_BREAKER_INITIAL_BACKOFF', 5),

    // Wait time (minutes) after probe failure before next probe
    'extended_backoff_minutes' => env('CIRCUIT_BREAKER_EXTENDED_BACKOFF', 15),

    // Time (minutes) at each scale level before increasing workers
    'scale_up_interval_minutes' => env('CIRCUIT_BREAKER_SCALE_INTERVAL', 5),

    // Maximum number of worker processes when fully scaled
    'max_workers' => env('CIRCUIT_BREAKER_MAX_WORKERS', 4),
],
```

These defaults mean: if 3 jobs fail within 5 minutes, trip the circuit. Wait 5 minutes, then probe. If the probe fails, wait 15 minutes before trying again.

## Detecting Relevant Failures

Not every job failure should trip the circuit breaker. A validation error or business logic exception shouldn't affect the circuit state. You only care about infrastructure failures:

```php
class FailureDetector
{
    private const FAILURE_PATTERNS = [
        'Connection timeout',
        'Connection refused',
        'Operation timed out',
        'cURL error',
        'Failed to connect',
        'Connection reset',
        'Network is unreachable',
    ];

    public function isCircuitBreakerFailure(Throwable $exception): bool
    {
        if ($exception instanceof ConnectionException) {
            return true;
        }

        return Str::contains(
            $exception->getMessage(),
            self::FAILURE_PATTERNS,
            ignoreCase: true
        );
    }
}
```

## Listening for Failures

Use Laravel's job failed event to record failures:

```php
class LlmJobFailedListener
{
    public function __construct(
        private readonly CircuitBreakerManager $manager,
        private readonly FailureDetector $detector,
    ) {}

    public function handle(JobFailed $event): void
    {
        // Only monitor the LLM queue
        if ($event->job->getQueue() !== 'llm') {
            return;
        }

        // Only trip on infrastructure failures
        if (! $this->detector->isCircuitBreakerFailure($event->exception)) {
            return;
        }

        $circuitType = $this->resolveCircuitType($event);

        $this->manager
            ->for($circuitType)
            ->recordFailure($this->detector->extractReason($event->exception));
    }
}
```

## The Probe Job

When the circuit transitions to half-open, dispatch a lightweight probe job to test if the service is back:

```php
class CircuitBreakerProbeJob implements ShouldQueue
{
    public int $timeout = 60;
    public int $tries = 1;

    public function __construct(
        public readonly string $circuitType,
    ) {
        $this->onQueue('llm');
    }

    public function handle(CircuitBreakerManager $manager): void
    {
        $breaker = $manager->for($this->circuitType);

        // Send a minimal request to test connectivity
        $response = Llm::connection($connection)
            ->timeout(30)
            ->chat([
                ['role' => 'user', 'content' => 'Reply with exactly: OK'],
            ]);

        if ($response->failed()) {
            $breaker->probeFailure();
            throw new RuntimeException("Probe failed: {$response->text()}");
        }

        // Success! Close the circuit
        $breaker->recordSuccess();
    }

    public function failed(Throwable $exception): void
    {
        // If the job itself fails, record that as a probe failure
        app(CircuitBreakerManager::class)
            ->for($this->circuitType)
            ->probeFailure();
    }
}
```

The probe is intentionally minimal. You're not trying to do real work, just checking if the service responds at all.

## Adaptive Worker Scaling

Here's where things get interesting. Rather than going from 0 workers to full capacity when the circuit closes, scale up gradually. This prevents overwhelming a service that just recovered:

```php
public function checkScaleUp(): bool
{
    if ($this->state() !== CircuitBreakerState::Closed) {
        return false;
    }

    $stableSince = $this->scaleStableSince();
    $currentLevel = $this->scaleLevel();
    $maxWorkers = Config::integer('llm.circuit_breaker.max_workers', 4);

    if ($currentLevel >= $maxWorkers) {
        return false;
    }

    // Must be stable for the configured interval before scaling up
    if ($this->minutesSince($stableSince) < Config::integer('llm.circuit_breaker.scale_up_interval_minutes', 5)) {
        return false;
    }

    $newLevel = min($currentLevel + 1, $maxWorkers);

    $this->remember('scale_level', $newLevel);
    $this->remember('scale_stable_since', now()->timestamp);

    return true;
}
```

This means after the circuit closes, you start with 1 worker. After 5 minutes of stability, scale to 2. Another 5 minutes, scale to 3. And so on up to your max.

## The Daemon Command

Tie it all together with a daemon that manages workers based on circuit state:

```php
class LlmQueueDaemonCommand extends Command
{
    protected $signature = 'llm:daemon {--check-interval=10}';

    private array $workers = [];

    public function handle(CircuitBreakerManager $manager): int
    {
        $this->info('Starting LLM Queue Daemon with Circuit Breaker...');

        while ($this->shouldRun) {
            foreach ($manager->all() as $type => $breaker) {
                // Check if we should probe
                if ($breaker->shouldTransitionToHalfOpen()) {
                    $breaker->transitionToHalfOpen();
                    CircuitBreakerProbeJob::dispatch($type);
                }

                // Check if we can scale up
                if ($breaker->state() === CircuitBreakerState::Closed) {
                    $breaker->checkScaleUp();
                }
            }

            // Adjust workers to match target scale level
            $targetWorkers = $manager->getEffectiveScaleLevel();
            $this->adjustWorkers($targetWorkers);

            sleep($this->option('check-interval'));
        }

        return self::SUCCESS;
    }

    private function adjustWorkers(int $target): void
    {
        $current = count($this->workers);

        if ($current < $target) {
            $this->startWorkers($target - $current);
        } elseif ($current > $target) {
            $this->stopWorkers($current - $target);
        }
    }
}
```

Run this as a long-running process: `php artisan llm:daemon`. It continuously monitors the circuit state and adjusts workers accordingly.

## Using Cache for State

Store the circuit state in cache so it's shared across all workers and survives restarts:

```php
private function transitionTo(CircuitBreakerState $state): void
{
    Cache::put(
        "circuit_breaker:{$this->connection}:state",
        $state->value,
        now()->addHours(24)
    );
}

public function state(): CircuitBreakerState
{
    $state = Cache::get("circuit_breaker:{$this->connection}:state");

    return CircuitBreakerState::tryFrom($state) ?? CircuitBreakerState::Closed;
}
```

Use Redis or another shared cache driver in production. File cache won't work across multiple servers.

## Separate Circuits for Different Services

If you're using multiple LLM services (e.g., one for chat, one for embeddings), use separate circuit breakers for each:

```php
class CircuitBreakerManager
{
    /** @var array<string, CircuitBreaker> */
    private array $breakers = [];

    public function for(string $type): CircuitBreaker
    {
        return $this->breakers[$type] ??= new CircuitBreaker($type);
    }

    public function getEffectiveScaleLevel(): int
    {
        // If any circuit is open, scale to 0
        foreach ($this->breakers as $breaker) {
            if ($breaker->state()->isOpen()) {
                return 0;
            }
        }

        // Otherwise, use the minimum scale level across all circuits
        return min(array_map(
            fn ($b) => $b->scaleLevel(),
            $this->breakers
        ));
    }
}
```

This way, if your embedding service goes down, you can still process chat requests (assuming they don't depend on each other).

## Health Checks Before Probing

For self-hosted services, you might have a health check endpoint. Use it before dispatching a probe to avoid unnecessary work:

```php
if ($manager->healthCheckBeforeProbe() && ! $vllmMetrics->isAvailable()) {
    $this->line("Health check failed, skipping probe");
    return;
}

$breaker->transitionToHalfOpen();
CircuitBreakerProbeJob::dispatch($type);
```

It's a bit of work to set up, but the first time your LLM service goes down at 2 AM and your app just handles it - you'll be glad you did.
