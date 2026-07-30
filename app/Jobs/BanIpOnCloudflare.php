<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\Middleware\WithoutOverlapping;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BanIpOnCloudflare implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public int $tries = 5;

    public int $uniqueFor = 3600;

    public function __construct(
        public string $ip,
        public string $reason,
    ) {}

    public function uniqueId(): string
    {
        return $this->ip;
    }

    /**
     * @return array<int, WithoutOverlapping>
     */
    public function middleware(): array
    {
        return [
            new WithoutOverlapping('cloudflare-ip-ban')
                ->releaseAfter(10)
                ->expireAfter(60),
        ];
    }

    public function handle(): void
    {
        $expression = $this->fetchCurrentExpression();

        if (str_contains($expression, $this->ipClause())) {
            return;
        }

        $this->updateRule("{$expression} or {$this->ipClause()}");

        Log::info("Banned IP {$this->ip} on Cloudflare", [
            'ip' => $this->ip,
            'reason' => $this->reason,
        ]);
    }

    private function fetchCurrentExpression(): string
    {
        $response = Http::withToken($this->token())
            ->throw()
            ->get($this->rulesetUrl());

        /** @var array<int, array{id: string, expression: string}> $rules */
        $rules = $response->json('result.rules', []);

        foreach ($rules as $rule) {
            if ($rule['id'] === $this->ruleId()) {
                return $rule['expression'];
            }
        }

        return '(ip.src eq 0.0.0.0)';
    }

    private function ipClause(): string
    {
        return "(ip.src eq {$this->ip})";
    }

    private function updateRule(string $expression): void
    {
        Http::withToken($this->token())
            ->patch($this->ruleUrl(), [
                'action' => 'block',
                'description' => 'IP Ban',
                'enabled' => true,
                'expression' => $expression,
            ])
            ->throw();
    }

    private function rulesetUrl(): string
    {
        $zoneId = Config::string('services.cloudflare.zone_id');
        $rulesetId = Config::string('services.cloudflare.ruleset_id');

        return "https://api.cloudflare.com/client/v4/zones/{$zoneId}/rulesets/{$rulesetId}";
    }

    private function ruleUrl(): string
    {
        return "{$this->rulesetUrl()}/rules/{$this->ruleId()}";
    }

    private function ruleId(): string
    {
        return Config::string('services.cloudflare.rule_id');
    }

    private function token(): string
    {
        return Config::string('services.cloudflare.token');
    }
}
