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
        return str_contains($request->path(), 'wp-admin')
            || str_contains($request->path(), 'wp-login')
            || str_contains($request->path(), 'wp-includes')
            || str_contains($request->path(), 'xmlrpc.php');
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
