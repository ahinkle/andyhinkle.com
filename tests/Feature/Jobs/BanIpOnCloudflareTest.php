<?php

use App\Jobs\BanIpOnCloudflare;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

beforeEach(function (): void {
    Http::preventStrayRequests();

    config([
        'services.cloudflare.zone_id' => 'test-zone-id',
        'services.cloudflare.ruleset_id' => 'test-ruleset-id',
        'services.cloudflare.rule_id' => 'test-rule-id',
        'services.cloudflare.token' => 'test-token',
    ]);
});

it('fetches current rule and appends new ip', function (): void {
    Http::fake([
        'api.cloudflare.com/client/v4/zones/test-zone-id/rulesets/test-ruleset-id' => Http::response([
            'result' => [
                'rules' => [
                    [
                        'id' => 'test-rule-id',
                        'expression' => '(ip.src eq 1.2.3.4)',
                    ],
                ],
            ],
        ]),
        'api.cloudflare.com/client/v4/zones/test-zone-id/rulesets/test-ruleset-id/rules/test-rule-id' => Http::response([
            'success' => true,
        ]),
    ]);

    $job = new BanIpOnCloudflare('5.6.7.8', 'Test ban');
    $job->handle();

    Http::assertSent(function ($request): bool {
        if ($request->method() === 'PATCH') {
            $body = $request->data();

            return $body['expression'] === '(ip.src eq 1.2.3.4) or (ip.src eq 5.6.7.8)'
                && $body['action'] === 'block'
                && $body['enabled'] === true;
        }

        return true;
    });
});

it('logs the ban', function (): void {
    Http::fake([
        'api.cloudflare.com/*' => Http::response([
            'result' => [
                'rules' => [
                    [
                        'id' => 'test-rule-id',
                        'expression' => '(ip.src eq 1.2.3.4)',
                    ],
                ],
            ],
            'success' => true,
        ]),
    ]);

    Log::shouldReceive('info')
        ->once()
        ->with('Banned IP 5.6.7.8 on Cloudflare', [
            'ip' => '5.6.7.8',
            'reason' => 'WordPress probe detected',
        ]);

    $job = new BanIpOnCloudflare('5.6.7.8', 'WordPress probe detected');
    $job->handle();
});

it('skips the update when the ip is already in the rule expression', function (): void {
    Http::fake([
        'api.cloudflare.com/client/v4/zones/test-zone-id/rulesets/test-ruleset-id' => Http::response([
            'result' => [
                'rules' => [
                    [
                        'id' => 'test-rule-id',
                        'expression' => '(ip.src eq 1.2.3.4) or (ip.src eq 5.6.7.8)',
                    ],
                ],
            ],
        ]),
    ]);

    $job = new BanIpOnCloudflare('5.6.7.8', 'Test ban');
    $job->handle();

    Http::assertSentCount(1);
});

it('still bans when the expression contains a similar but different ip', function (): void {
    Http::fake([
        'api.cloudflare.com/client/v4/zones/test-zone-id/rulesets/test-ruleset-id' => Http::response([
            'result' => [
                'rules' => [
                    [
                        'id' => 'test-rule-id',
                        'expression' => '(ip.src eq 15.6.7.89)',
                    ],
                ],
            ],
        ]),
        'api.cloudflare.com/client/v4/zones/test-zone-id/rulesets/test-ruleset-id/rules/test-rule-id' => Http::response([
            'success' => true,
        ]),
    ]);

    $job = new BanIpOnCloudflare('5.6.7.8', 'Test ban');
    $job->handle();

    Http::assertSent(function ($request): bool {
        if ($request->method() === 'PATCH') {
            return $request->data()['expression'] === '(ip.src eq 15.6.7.89) or (ip.src eq 5.6.7.8)';
        }

        return true;
    });
});

it('handles empty ruleset by using default expression', function (): void {
    Http::fake([
        'api.cloudflare.com/client/v4/zones/test-zone-id/rulesets/test-ruleset-id' => Http::response([
            'result' => [
                'rules' => [],
            ],
        ]),
        'api.cloudflare.com/client/v4/zones/test-zone-id/rulesets/test-ruleset-id/rules/test-rule-id' => Http::response([
            'success' => true,
        ]),
    ]);

    $job = new BanIpOnCloudflare('5.6.7.8', 'Test ban');
    $job->handle();

    Http::assertSent(function ($request): bool {
        if ($request->method() === 'PATCH') {
            $body = $request->data();

            return $body['expression'] === '(ip.src eq 0.0.0.0) or (ip.src eq 5.6.7.8)';
        }

        return true;
    });
});
