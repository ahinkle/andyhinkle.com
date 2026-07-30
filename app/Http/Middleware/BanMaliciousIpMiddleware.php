<?php

namespace App\Http\Middleware;

use App\Jobs\BanIpOnCloudflare;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Symfony\Component\HttpFoundation\Response;

class BanMaliciousIpMiddleware
{
    private const int MAX_404_COUNT = 5;

    private const int WINDOW_SECONDS = 120;

    private const int BAN_DEDUPE_SECONDS = 86400;

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

        Log::info("[404] {$ip} {$request->path()}");

        $count = RateLimiter::hit($key, self::WINDOW_SECONDS);

        if ($count >= self::MAX_404_COUNT) {
            $this->banIp($ip, "Exceeded 404 threshold ({$count} in ".self::WINDOW_SECONDS.' seconds)');

            RateLimiter::clear($key);
        }
    }

    private function banIp(string $ip, string $reason): void
    {
        if (! Cache::add("ip_banned:{$ip}", true, self::BAN_DEDUPE_SECONDS)) {
            return;
        }

        BanIpOnCloudflare::dispatch($ip, $reason);
    }
}
