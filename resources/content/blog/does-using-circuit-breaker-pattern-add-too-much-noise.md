---
title: "Does using the Circuit Breaker Pattern add too much noise?"
description: "A common concern with resilience patterns is code complexity. Here's how to implement circuit breakers that sit outside your code."
published_at: "2025-12-09"
---

You've got a simple third-party API call:

```php
class PaymentGateway
{
    public function charge(int $amount): PaymentResult
    {
        return Http::post('https://api.stripe.com/v1/charges', [
            'amount' => $amount,
        ])->json();
    }
}
```

Clean. Easy to read. Then one day the API starts failing intermittently. Your app hammers it with retries, users get timeout errors, and you decide to add a circuit breaker.

Now your code looks like this:

```php
class PaymentGateway
{
    public function __construct(
        private CircuitBreaker $circuitBreaker
    ) {}

    public function charge(int $amount): PaymentResult
    {
        if ($this->circuitBreaker->isOpen()) {
            throw new ServiceUnavailableException('Payment service temporarily unavailable');
        }

        try {
            $result = Http::post('https://api.stripe.com/v1/charges', [
                'amount' => $amount,
            ])->json();

            $this->circuitBreaker->recordSuccess();

            return $result;
        } catch (Exception $e) {
            $this->circuitBreaker->recordFailure();

            if ($this->circuitBreaker->isOpen()) {
                throw new ServiceUnavailableException('Payment service temporarily unavailable');
            }

            throw $e;
        }
    }
}
```

This is the complaint. What was 5 lines is now 25. The circuit breaker logic is tangled with your business logic. Every method that calls an external service needs this same boilerplate.

It doesn't have to be this way.

## Let the Circuit Breaker Listen From Outside

Instead of weaving circuit breaker logic into your class, let it wrap your class from the outside. Your original code stays untouched.

### Using a Decorator

Create a decorator that sits in front of your service:

```php
class CircuitBreakerPaymentGateway implements PaymentGatewayInterface
{
    public function __construct(
        private PaymentGateway $gateway,
        private CircuitBreaker $circuitBreaker
    ) {}

    public function charge(int $amount): PaymentResult
    {
        return $this->circuitBreaker->call(
            fn () => $this->gateway->charge($amount)
        );
    }
}
```

Your original `PaymentGateway` class? Unchanged. Still that clean 5-line method. The circuit breaker wraps it from the outside, listening for failures without polluting the original code.

Bind it in your service container:

```php
$this->app->bind(PaymentGatewayInterface::class, function ($app) {
    return new CircuitBreakerPaymentGateway(
        new PaymentGateway(),
        new CircuitBreaker('payments')
    );
});
```

### Using a Base Class

If you have multiple services that need circuit breaking, use inheritance:

```php
abstract class ExternalService
{
    protected CircuitBreaker $circuitBreaker;

    protected function withCircuitBreaker(callable $operation): mixed
    {
        return $this->circuitBreaker->call($operation);
    }
}
```

```php
class PaymentGateway extends ExternalService
{
    public function charge(int $amount): PaymentResult
    {
        return $this->withCircuitBreaker(fn () =>
            Http::post('https://api.stripe.com/v1/charges', [
                'amount' => $amount,
            ])->json()
        );
    }
}
```

One extra line. The circuit breaker behavior is inherited, not implemented.

### Using a Trait

Prefer composition over inheritance? Use a trait:

```php
trait HasCircuitBreaker
{
    protected function withCircuitBreaker(string $service, callable $operation): mixed
    {
        return app(CircuitBreakerManager::class)
            ->for($service)
            ->call($operation);
    }
}
```

```php
class PaymentGateway
{
    use HasCircuitBreaker;

    public function charge(int $amount): PaymentResult
    {
        return $this->withCircuitBreaker('payments', fn () =>
            Http::post('https://api.stripe.com/v1/charges', [
                'amount' => $amount,
            ])->json()
        );
    }
}
```

Same result. The trait brings in the capability without cluttering your class with implementation details.

## The Pattern Isn't Noisy but Bad Implementation Is

The circuit breaker pattern itself doesn't add noise. Implementing it inline does. When you let the circuit breaker sit outside your code (as a decorator, base class, or trait) your business logic stays focused on what it actually does.

The circuit breaker listens in. It tracks failures. It opens and closes. But your code? Your code just makes the call.

That's the difference between a pattern adding noise and a pattern being implemented poorly. Use the tools PHP gives you to keep the resilience logic where it belongs: outside.

Cheers
