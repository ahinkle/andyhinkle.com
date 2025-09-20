<x-app>
    <x-slot name="seo">
        <title>Using Cloudflare Page Cache with Laravel</title>
        <meta name="description"
            content="How to use Cloudflare page cache with Laravel to cache pages to improve performance and reduce server load." />
        <meta property="og:title" content="Using Cloudflare Page Cache with Laravel" />
        <meta property="og:description"
            content="How to use Cloudflare page cache with Laravel to cache pages to improve performance and reduce server load." />
        <script type="application/ld+json">
            {
                "@@context": "https://schema.org",
                "@type": "BlogPosting",
                "headline": "Using Cloudflare Page Cache with Laravel",
                "datePublished": "2024-07-21T09:00:00+08:00",
                "dateModified": "2024-07-21T09:00:00+08:00",
            }
        </script>
        </script>
    </x-slot>

    <p class="py-2 text-center font-sans text-sm text-white/75">July 21, 2024</p>
    <h1 class="text-center font-sans text-3xl font-bold text-white md:text-5xl">Using Cloudflare Page Cache with Laravel
    </h1>

    <div class="mx-auto mt-8 max-w-3xl">
        <p class="text-wrap text-left text-lg text-white/85">
            Cloudflare is a popular CDN that can cache your website's assets and pages to improve performance and reduce
            server load. In Laravel applications, you can use Cloudflare's page cache feature to cache entire pages and
            serve them directly from Cloudflare's edge servers.
        </p>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            We are going to assume that you have already registered and set up your domain with Cloudflare. If you
            haven't, you can follow the instructions on Cloudflare's website to set up your domain.
        </p>

        <h2 class="mt-8 text-center font-sans text-2xl font-bold text-white md:text-4xl">Step 1: Configure Cloudflare
            Page Rules</h2>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            To enable page caching for your Laravel application, you need to create a page rule in Cloudflare that tells
            Cloudflare to cache all pages on your site.
        </p>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            Log in to your Cloudflare account and navigate to your domain's settings. Under the "Cache" tab, click on
            "Cache Rules":
        </p>

        <img src="/images/blog/cloudflare/cache-rules.png" alt="Cloudflare Cache Rules" class="mx-auto mt-4 w-1/2">

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            Click on "Create Rule" - Your Rule Name can be anything you want (I named mine "Cache All"). The rules
            should be set to the following:
        </p>

        <ul class="mt-4 grid grid-cols-1 space-y-4 text-wrap text-left text-lg text-white/85">
            <li>IF..</li>
            <li>When incoming requests match...</li>
            <li class="ml-2">All Incoming Requests <span class="font-bold">(checked)</span></li>
            <li>Then...</li>
            <li class="ml-2">Cache Eligibility: Cache Everything <span class="font-bold">(checked)</span></li>
            <li class="text-sm italic">(the rest of the settings can be left as default)</li>
            <li>Place at: First</li>
        </ul>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            It should look like this:
        </p>

        <img src="/images/blog/cloudflare/cache-rule-settings.png" alt="Cloudflare Cache Rule Settings"
            class="mx-auto mt-4 w-full">

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            Click "Save and Deploy" to save your changes.
        </p>

        <h2 class="mt-8 text-center font-sans text-2xl font-bold text-white md:text-4xl">Step 2: Configure Laravel to
            Work with Cloudflare Page Cache</h2>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            By default, Laravel sends a "no-cache" header with every response, which tells Cloudflare not to cache the
            page. To enable Cloudflare page cache for your Laravel application, you need to modify the response headers
            to allow caching.
        </p>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            You can do this by adding the following middleware to your Laravel application:
        </p>
        <pre>
        <x-torchlight-code language='php'>
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
        </x-torchlight-code>
        </pre>

        <p class="mt-10 text-wrap text-left text-lg text-white">
            Let's break down what this middleware does:
        </p>

        <ul class="mt-4 grid list-inside list-disc grid-cols-1 space-y-4 text-wrap text-left text-lg text-white/85">
            <li>It does not cache responses in non-production environments.</li>
            <li>It does not cache responses for authenticated users. </li>
            <li>It only caches GET requests that return a successful response. </li>
            <li>It sets the "Cache-Control" header to "max-age=1800" (30 minutes) for responses that should be cached.
            </li>
            <li>If we don't meet the criteria, we don't cache the response and continue as normal.</li>
        </ul>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            Now you may modify the maximum age to your desired value. Cloudflare does not have a maximum cache time, but
            it's always a good idea to set a reasonable cache time -- I wouldn't recommend setting it to more than a few
            hours. Just remember that it must be in seconds.
        </p>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            Next, you need to register the middleware in your <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">bootstrap/app.php</code> file:
        </p>

        <pre>
        <x-torchlight-code language='php'>
        use App\Http\Middleware\CachePageMiddleware;

        return Application::configure(basePath: dirname(__DIR__))
            ->withRouting(
                web: __DIR__.'/../routes/web.php',
                commands: __DIR__.'/../routes/console.php',
                health: '/up',
            )
            ->withMiddleware(function (Middleware $middleware) {
                $middleware->append(CachePageMiddleware::class); // [tl! focus]
            })
            ->withExceptions(function (Exceptions $exceptions) {
                //
            })->create();
        </x-torchlight-code>
        </pre>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            This will add the <code>CachePageMiddleware</code> to the end of the middleware stack, so it will be
            executed on every request.
        </p>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            Your application is now configured to work with Cloudflare page cache. Cloudflare will cache your pages and
            serve them directly from its edge servers, improving performance and reducing server load.
        </p>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            You can test if Cloudflare is caching your pages by checking the <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">cf-cache-status</code> header in the response
            headers. If it says <code class="rounded-md bg-gray-900 p-1 text-sm text-white">HIT</code> then the page was
            served from Cloudflare's cache.
        </p>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            Keep in mind that Cloudflare page cache is not a replacement for Laravel's built-in caching mechanisms like
            Redis or Memcached. It's best used for static pages that don't change often. If you have dynamic content
            that changes frequently, you should use Laravel's built-in caching mechanisms instead.
        </p>

        <p class="mt-4 text-wrap text-left text-lg text-white/85">
            That's it! You've successfully configured Cloudflare page cache with your Laravel application. Your site
            should now be faster and more responsive, with reduced server load.
        </p>
    </div>
</x-app>
