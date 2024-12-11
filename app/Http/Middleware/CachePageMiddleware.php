<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CachePageMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($this->shouldCacheResponse($request, $response)) {
            $response->headers->add([
                'Cache-Control' => 'max-age=1800, public',
            ]);
        }

        return $response;
    }

    public function shouldCacheResponse(Request $request, Response $response): bool
    {
        return app()->isProduction() &&
               ! auth()->check() &&
               $request->isMethod('GET') &&
               $response->isSuccessful();
    }
}
