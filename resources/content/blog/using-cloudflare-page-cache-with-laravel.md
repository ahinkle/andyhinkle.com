---
title: "Using Cloudflare Page Cache with Laravel"
description: "How to use Cloudflare page cache with Laravel to cache pages to improve performance and reduce server load."
published_at: "2024-07-21"
---

> **Update (December 2025):** The approach below has a limitation - Laravel's default session middleware adds `Set-Cookie` headers which cause Cloudflare to bypass caching. For a complete solution, see [JMac's article on separating your Cloudflare page cache](https://laravel-news.com/separate-your-cloudflare-page-cache-with-a-middleware-group) which explains how to use a stateless middleware group.

Cloudflare is a popular CDN that can cache your website's assets and pages to improve performance and reduce server load. In Laravel applications, you can use Cloudflare's page cache feature to cache entire pages and serve them directly from Cloudflare's edge servers.

We are going to assume that you have already registered and set up your domain with Cloudflare. If you haven't, you can follow the instructions on Cloudflare's website to set up your domain.

## Step 1: Configure Cloudflare Page Rules

To enable page caching for your Laravel application, you need to create a page rule in Cloudflare that tells Cloudflare to cache all pages on your site.

Log in to your Cloudflare account and navigate to your domain's settings. Under the "Cache" tab, click on "Cache Rules":

![Cloudflare Cache Rules](/images/blog/cloudflare/cache-rules.png)

Click on "Create Rule" - Your Rule Name can be anything you want (I named mine "Cache All"). The rules should be set to the following:

- IF..
- When incoming requests match...
- All Incoming Requests **(checked)**
- Then...
- Cache Eligibility: Cache Everything **(checked)**
- (the rest of the settings can be left as default)
- Place at: First

It should look like this:

![Cloudflare Cache Rule Settings](/images/blog/cloudflare/cache-rule-settings.png)

Click "Save and Deploy" to save your changes.

## Step 2: Configure Laravel to Work with Cloudflare Page Cache

By default, Laravel sends a "no-cache" header with every response, which tells Cloudflare not to cache the page. To enable Cloudflare page cache for your Laravel application, you need to modify the response headers to allow caching.

You can do this by adding the following middleware to your Laravel application:

```php
use Symfony\Component\HttpFoundation\Response;

class CachePageMiddleware
{
    public function handle($request, \Closure $next): Response
    {
        $response = $next($request);

        if ($this->shouldCacheResponse($request, $response)) {
            $response->headers->add([
                'Cache-Control' => 'max-age=1800, public',
            ]);
        }

        return $response;
    }

    public function shouldCacheResponse($request, Response $response): bool
    {
        if (! app()->isProduction()) {
            return false;
        }

        if (auth()->check()) {
            return false;
        }

        if (! $request->isMethod('GET')) {
            return false;
        }

        if (! $response->isSuccessful()) {
            return false;
        }

        return true;
    }
}
```

Let's break down what this middleware does:

- It does not cache responses in non-production environments.
- It does not cache responses for authenticated users.
- It only caches GET requests that return a successful response.
- It sets the "Cache-Control" header to "max-age=1800" (30 minutes) for responses that should be cached.
- If we don't meet the criteria, we don't cache the response and continue as normal.

Now you may modify the maximum age to your desired value. Cloudflare does not have a maximum cache time, but it's always a good idea to set a reasonable cache time -- I wouldn't recommend setting it to more than a few hours. Just remember that it must be in seconds.

Next, you need to register the middleware in your `bootstrap/app.php` file:

```php
use App\Http\Middleware\CachePageMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(CachePageMiddleware::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
```

This will add the `CachePageMiddleware` to the end of the middleware stack, so it will be executed on every request.

Your application is now configured to work with Cloudflare page cache. Cloudflare will cache your pages and serve them directly from its edge servers, improving performance and reducing server load.

You can test if Cloudflare is caching your pages by checking the `cf-cache-status` header in the response headers. If it says `HIT` then the page was served from Cloudflare's cache.

Keep in mind that Cloudflare page cache is not a replacement for Laravel's built-in caching mechanisms like Redis or Memcached. It's best used for static pages that don't change often. If you have dynamic content that changes frequently, you should use Laravel's built-in caching mechanisms instead.

That's it! You've successfully configured Cloudflare page cache with your Laravel application. Your site should now be faster and more responsive, with reduced server load.
