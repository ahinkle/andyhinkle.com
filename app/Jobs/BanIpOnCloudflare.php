<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BanIpOnCloudflare implements ShouldQueue
{
    use Queueable;

    public function __construct(
        public string $ip,
        public string $reason,
    ) {}

    public function handle(): void
    {
        $expression = $this->fetchCurrentExpression();

        $updatedExpression = $this->appendIp($expression);

        $this->updateRule($updatedExpression);

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

    private function appendIp(string $expression): string
    {
        return "{$expression} or (ip.src eq {$this->ip})";
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
