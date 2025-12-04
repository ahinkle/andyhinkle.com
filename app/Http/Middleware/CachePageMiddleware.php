<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class CachePageMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        /** @var Response $response */
        $response = $next($request);

        if ($this->shouldCacheResponse($request, $response)) {
            $response->headers->set('Cache-Control', 'max-age=1800, public');
        }

        return $response;
    }

    public function shouldCacheResponse(Request $request, Response $response): bool
    {
        return App::isProduction() &&
               $request->isMethod('GET') &&
               $response->isSuccessful();
    }
}
