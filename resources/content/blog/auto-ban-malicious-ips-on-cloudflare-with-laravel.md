---
title: "Auto-Ban Malicious IPs on Cloudflare with Laravel"
description: "How to automatically ban malicious IPs on Cloudflare when they trigger too many 404s or probe for WordPress vulnerabilities, keeping your logs clean and your site secure."
published_at: "2025-12-14"
---

If you're running a Laravel site behind Cloudflare, you've probably noticed something frustrating in your logs: waves of 404 errors from bots probing for WordPress vulnerabilities, [React vulnerabilities](https://www.bitdefender.com/en-us/blog/businessinsights/advisory-react2shell-critical-unauthenticated-rce-in-react-cve-2025-55182), or other various paths. Requests to `/wp-admin`, `/wp-login.php`, `/wp-includes` - even though you're not running WordPress or React.

Cloudflare's WAF rules can block these requests, but here's the catch: **WAF rules are path-specific, not blanket blocks**. When a rule triggers on `/wp-admin`, it blocks that specific path while the same visitor can still access `/`, `/about`, or any other page. The bot gets a 403 on the WordPress path, shrugs, and continues probing other URLs.

The result? Your analytics can fill with 404 errors from the same malicious IPs, skewing your analytics and making it harder to spot real issues. Your server still processes these requests, wasting resources, and you consume Nightwatch credits or other monitoring tools that mark these requests as failures.

Cloudflare offers IP blocking, but manually banning IPs is tedious and reactive. You can view a sample of traffic by visiting Security → Analytics in Cloudflare, but this only shows a fraction of the traffic and requires manual intervention. Here's an example of one such IP repeatedly hitting various non-existent paths:

<a href="/images/blog/cloudflare/malicious-bot.png" target="_blank">
    <img src="/images/blog/cloudflare/malicious-bot.png" alt="Malicious Bot Probing" />
</a>

Let's fix that by automatically banning IPs at the Cloudflare level when they exhibit malicious behavior.

## The Strategy

We'll build a Laravel middleware that:

1. **Immediately bans** any IP requesting WordPress-related paths
2. **Tracks 404 errors** per IP address using Laravel's cache
3. **Auto-bans** any IP that triggers 5+ 404s within 120 seconds
4. **Updates Cloudflare's WAF** via a queued job to add the IP to a block rule

The beauty of this approach is that once an IP is banned at Cloudflare's edge, they never even reach your server again.

## Step 1: Set Up Cloudflare

First, you'll need a WAF Custom Rule in Cloudflare to hold your banned IPs.

1. Go to your Cloudflare dashboard → Security → WAF → Custom Rules
2. Create a new rule with these settings:
   - **Rule name:** IP Ban
   - **Expression:** `(ip.src eq 0.0.0.0)` (we'll update this dynamically)
   - **Action:** Block
3. Note the Zone ID, Ruleset ID, and Rule ID from the URL and API

Create an API Token with **Zone → Zone WAF → Read** and **Zone → Zone WAF → Edit** permissions.

Add these to your `.env`:

```env
CLOUDFLARE_ZONE=your-zone-id
CLOUDFLARE_RULESET=your-ruleset-id
CLOUDFLARE_RULE=your-rule-id
CLOUDFLARE_TOKEN=your-api-token
```

And register them in `config/services.php`:

```php
'cloudflare' => [
    'zone_id' => env('CLOUDFLARE_ZONE'),
    'ruleset_id' => env('CLOUDFLARE_RULESET'),
    'rule_id' => env('CLOUDFLARE_RULE'),
    'token' => env('CLOUDFLARE_TOKEN'),
],
```

## Step 2: Create the Ban Job

This queued job handles the Cloudflare API interaction. It fetches the current rule, appends the new IP to the expression, and updates the rule.

```bash
php artisan make:job BanIpOnCloudflare
```

```php
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

        $updatedExpression = "{$expression} or (ip.src eq {$this->ip})";

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

        $rules = $response->json('result.rules', []);

        foreach ($rules as $rule) {
            if ($rule['id'] === $this->ruleId()) {
                return $rule['expression'];
            }
        }

        return '(ip.src eq 0.0.0.0)';
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
```

The expression format Cloudflare uses is `(ip.src eq X) or (ip.src eq Y)`. We simply append new IPs to the existing expression.

## Step 3: Create the Middleware

Now for the middleware that detects malicious behavior and dispatches the ban job.

```bash
php artisan make:middleware BanMaliciousIpMiddleware
```

```php
<?php

namespace App\Http\Middleware;

use App\Jobs\BanIpOnCloudflare;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class BanMaliciousIpMiddleware
{
    private const int MAX_404_COUNT = 5;

    private const int WINDOW_SECONDS = 120;

    /**
     * @param  Closure(Request): Response  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! App::isProduction()) {
            return $next($request);
        }

        if ($this->isWordPressProbe($request)) {
            $this->banIp((string) $request->ip(), 'WordPress probe detected');

            abort(403);
        }

        $response = $next($request);

        if ($response->isNotFound()) {
            $this->trackNotFound($request);
        }

        return $response;
    }

    private function isWordPressProbe(Request $request): bool
    {
        return collect(['wp-admin', 'wp-login', 'wp-includes'])
            ->contains(fn (string $probe) => str_contains($request->path(), $probe));
    }

    private function trackNotFound(Request $request): void
    {
        $ip = (string) $request->ip();
        $key = "ip_404_count:{$ip}";

        $count = Cache::increment($key);

        if ($count === 1) {
            Cache::put($key, 1, self::WINDOW_SECONDS);
        }

        if ($count >= self::MAX_404_COUNT) {
            $this->banIp($ip, "Exceeded 404 threshold ({$count} in ".self::WINDOW_SECONDS.' seconds)');

            Cache::forget($key);
        }
    }

    private function banIp(string $ip, string $reason): void
    {
        BanIpOnCloudflare::dispatch($ip, $reason);
    }
}
```

Let's break down what this does:

- **Production only** - We skip all tracking in local/staging to avoid accidentally banning ourselves
- **WordPress probes** - Immediate ban and 403 response for any request containing `wp-admin`, `wp-login`, or `wp-includes`
- **404 tracking** - We increment a counter in cache for each IP that triggers a 404, a strong indication of probing behavior when done repeatedly
- **Threshold ban** - If an IP hits 5+ 404s within 120 seconds, we ban them

## Step 4: Register the Middleware

Add the middleware to your `bootstrap/app.php`:

```php
use App\Http\Middleware\BanMaliciousIpMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append([
            BanMaliciousIpMiddleware::class,
        ]);
    })
    // ...
```

## The Result

Now when a malicious bot hits your site:

1. If they request `/wp-admin` → Immediate 403 + banned on Cloudflare
2. If they probe random URLs and trigger 5+ 404s → Banned on Cloudflare
3. All subsequent requests from that IP are blocked at Cloudflare's edge

Your logs stay clean. Your analytics stay accurate. And the bots never reach your server again.

## Tuning the Thresholds

The default settings (5 404s in 120 seconds) work well for most sites, but you should customize this for what makes sense in your application. Beyond 404s, you could also track things like:

- **403 errors** - Too many forbidden requests could indicate someone probing for access
- **Failed authentication attempts** - Repeated login failures from the same IP
- **Rate limit violations** - IPs that consistently hit your rate limits

Here are some other adjustments to consider:

- **High-traffic sites**: Consider raising the threshold to 10+ to avoid false positives
- **First or fail endpoints**: You might want to exclude certain paths from 404 tracking, especially if they are soft-deleted or frequently changing
- **Legitimate crawlers**: Consider whitelisting known good bots by user agent

You could also extend the WordPress probe detection to include other common attack vectors like `.env`, `phpinfo.php`, or `.git/config`.

## Resources

- [Cloudflare API Documentation](https://developers.cloudflare.com/api/)
- [Cloudflare WAF Custom Rules](https://developers.cloudflare.com/waf/custom-rules/)
- [Laravel Queues](https://laravel.com/docs/queues)
- [Laravel Middleware](https://laravel.com/docs/middleware)

---

Looking to get started with Cloudflare caching? Check out my other post on [Using Cloudflare Page Cache with Laravel](/blog/using-cloudflare-page-cache-with-laravel).
