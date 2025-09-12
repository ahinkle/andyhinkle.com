<x-app>
    <x-slot name="seo">
        <title>Deeply Monitoring Laravel Events with AWS CloudWatch</title>
        <meta name="description"
            content="How to deeply monitor Laravel events with AWS CloudWatch (and Laravel Vapor) to gain insights into your application's performance and behavior." />
        <meta property="og:title" content="Deeply Monitoring Laravel Events with AWS CloudWatch" />
        <meta property="og:description"
            content="How to deeply monitor Laravel events with AWS CloudWatch (and Laravel Vapor) to gain insights into your application's performance and behavior." />
        <script type="application/ld+json">
            {
                "@@context": "https://schema.org",
                "@@type": "BlogPosting",
                "headline": "Deeply Monitoring Laravel Events with AWS CloudWatch",
                "datePublished": "2024-09-04T09:00:00+08:00",
                "dateModified": "2024-09-04T09:00:00+08:00",
            }
        </script>
    </x-slot>

    <a href="/images/blog/aws/aws-cloudwatch-monitoring-laravel-events.png" target="_blank">
        <img src="/images/blog/aws/aws-cloudwatch-monitoring-laravel-events.png" alt="Cloudflare Cache Rules"
            class="mx-auto mt-4 w-full">
    </a>

    <p class="py-2 pt-5 text-center font-sans text-sm text-white/75">September 4, 2024</p>
    <h1 class="text-center font-sans text-3xl font-bold text-white md:text-5xl">Deeply Monitoring Laravel Events with
        AWS CloudWatch</h1>

    <div class="mx-auto mt-8 max-w-3xl">

        <p class="text-left text-lg text-white/85">
            When you're deploying with services like Laravel Vapor, paired with AWS services like CloudWatch, you have
            powerful tools at your disposal to gain deep insights into your application's events and behaviors.
        </p>

        <h2 class="mt-8 text-2xl font-bold text-white">Default logging isn't enough for your Applications</h2>

        <p class="mt-4 text-left text-lg text-white/85">
            You get an email from the client, "We've received a report that a user cannot reset their password. The
            password reset email link isn't working. They click the link, but nothing happens."
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            First stop: the logs. You sift through them, expecting to find a red flag or exception. But instead, it's
            business as usual—no errors, no anomalies.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            Next, you dive into the database, zeroing in on the <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">password_reset_tokens</code> table. Sure enough,
            you find fresh entries—evidence that password reset requests are being processed as expected.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            Then, we look at SES. The emails are going out and the users are receiving them, so the email delivery isn’t
            the culprit.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            Curious about the email content - <span class="italic">what did that link look like?</span> Well, that's
            where things get tricky. Since the emails are sent via SES, there's no record of the content on your end.
            You're flying blind.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            Returning to the database, we see the reset record but now the password reset token is expired, having been
            generated days ago. So we cannot replicate the issue.
        </p>

        <p class="mt-2 text-left text-lg text-white/85">
            You're left scratching your head, <span class="italic">"What could be the issue? Did the user wait too long?
                Was it their email client? Did they even click the link?</span>
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            This is a common scenario when you're debugging issues in production. You have the logs, but they don't
            provide enough context to understand the issue.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            <span class="italic">"If only I could see what the user did..."</span>, how many times have you said that as
            a developer?</span>
        </p>

        <h2 class="mt-8 text-2xl font-bold text-white">Use the Events to your advantage</h2>

        <p class="mt-4 text-left text-lg text-white/85">
            Laravel has many default events that fire during the application's lifecycle.
            These events are the perfect opportunity to gain insights into your application's behavior. By logging these
            events, you can see what's happening in your application in real-time.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            Let's look at a few:
        </p>

        <ul class="mt-4 overflow-hidden text-left text-lg text-white/85">
            <li><code class="rounded-md bg-gray-900 p-1 text-sm text-white">Illuminate\Auth\Events\Login</code> - fired
                when a user logs in</li>
            <li><code class="rounded-md bg-gray-900 p-1 text-sm text-white">Illuminate\Auth\Events\Logout</code> - fired
                when a user logs out</li>
            <li><code class="rounded-md bg-gray-900 p-1 text-sm text-white">Illuminate\Auth\Events\PasswordReset</code>
                - fired when a user resets their password</li>
            <li><code class="rounded-md bg-gray-900 p-1 text-sm text-white">Illuminate\Auth\Events\Registered</code> -
                fired when a user registers</li>
            <li><code class="rounded-md bg-gray-900 p-1 text-sm text-white">Illuminate\Auth\Events\Attempting</code> -
                fired when a user attempts to log in</li>
            <li><code
                    class="rounded-md bg-gray-900 p-1 text-sm text-white">Illuminate\Foundation\Http\Events\RequestHandled</code>
                - fired when a request is handled by the application</li>
            <li><code
                    class="rounded-md bg-gray-900 p-1 text-sm text-white">Illuminate\Database\Events\QueryExecuted</code>
                - fired when a database query is executed</li>
        </ul>

        <p class="mt-4 text-left text-lg text-white/85">
            These events provide lots of context about what's happening in your application. By logging them, you can
            gain insights into your application's performance and behavior.
        </p>

        <h2 class="mt-8 text-2xl font-bold text-white">How to globally log Laravel Events</h2>

        <p class="mt-4 text-left text-lg text-white/85">
            Laravel makes it easy to log events using the built-in event system. You can create listeners for events and
            log them to your preferred logging service.
        </p>

        <p class="my-4 text-left text-lg text-white/85">
            The easiest way to add these listeners is in your <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">AppServiceProvider.php</code>. Here's an example
            of how you can log the <code class="rounded-md bg-gray-900 p-1 text-sm text-white">Login</code> event:
        </p>

        <pre>
        <x-torchlight-code language='php'>
            namespace App\Providers;

            use Illuminate\Auth\Events\Login;
            use Illuminate\Support\Facades\Event;
            use Illuminate\Support\Facades\Log;
            use Illuminate\Support\ServiceProvider;

            class AppServiceProvider extends ServiceProvider
            {
                /**
                * Bootstrap any application services.
                */
                public function boot(): void
                {
                    Event::listen(Login::class, function (Login $event) {// [tl! focus]
                        Log::info('Successful Authentication', [ // [tl! focus]
                            'user_id' => $event->user->id, // [tl! focus]
                            'email' => $event->user->email, // [tl! focus]
                        ]); // [tl! focus]
                    }); // [tl! focus]
                }
            }
        </x-torchlight-code>
        </pre>

        <p class="mt-4 text-left text-lg text-white/85">
            In this example, we're listening for the <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">Login</code> event and logging the user's ID and
            email address.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            Which in return, the log will look like this:
        </p>

        <pre>
        <x-torchlight-code language='php'>
            [2024-08-22 09:00:00] local.INFO: Successful Authentication {"user_id":1,"email":"test@example.com"}
        </x-torchlight-code>
        </pre>

        <p class="mt-4 text-left text-lg text-white/85">
            This looks okay, but I like to prefix my logs with a group name to make it easier to filter and it's
            consistent across all authentication-related logs.
        </p>

        <pre>
        <x-torchlight-code language='php'>
            Log::info('[AUTH] Successful Authentication', [ // [tl! focus]
                'user_id' => $event->user->id, 
                'email' => $event->user->email, 
            ]); 
        </x-torchlight-code>
        </pre>

        <h2 class="mt-8 text-2xl font-bold text-white">The Power of Shared Context</h2>

        <p class="mt-4 text-left text-lg text-white/85">
            In Laravel 11, Laravel core team member <a href="https://github.com/timacdonald"
                class="text-blue-400 hover:underline">Tim MacDonald</a> introduced <a
                href="https://github.com/laravel/framework/pull/49730" class="text-blue-400 hover:underline">Context</a>
            to logging. This feature allows you to add context to your logs, making it easier to filter and search for
            specific logs.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            In the example above, I added context to the log message with the second parameter of the <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">Log::info</code> method. This context is an array
            of additional data that you want to include in the log message.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            The real magic happens when you use the <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">Log::withContext</code> method. This method allows
            you to add context to all log messages within a given closure.
        </p>

        <pre>
        <x-torchlight-code language='php'>
            Log::shareContext([
                'email' => $request->user()?->email,
                'ip' => $request->ip(),
                'via' => $request->expectsJson() ? 'api' : 'web',
                'user_agent' => $request->userAgent(),
            ]);
        </x-torchlight-code>
        </pre>

        <p class="mt-4 text-left text-lg text-white/85">
            In this example, we're sharing context with all log messages within the closure. This means that the <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">email</code>, <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">ip</code>, <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">via</code>, and <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">user_agent</code> fields will be added to all log
            messages within the closure.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            Now we can remove the context in the middle of the code from the log message and let Laravel handle it for
            us. This allows us to have consistent context across all log messages.
        </p>

        <pre>
        <x-torchlight-code language='php'>
            Log::info('[AUTH] Successful Authentication'); 
        </x-torchlight-code>
        </pre>

        <p class="mt-4 text-left text-lg text-white/85">
            The log message will now look like this:
        </p>

        <pre>
        <x-torchlight-code language='php'>
            [2024-08-22 09:00:00] local.INFO: [AUTH] Successful Authentication {"email":" foo@bar.com","ip":"xxx.xx.xxx.xx","via":"web","user_agent":"Mozilla/5.0"}
        </x-torchlight-code>
        </pre>

        <h2 class="mt-8 text-2xl font-bold text-white">Adding Context to all Logs</h2>

        <p class="mt-4 text-left text-lg text-white/85">
            You can add the `sharedContext` to all log messages by creating a middleware that adds the context to the
            request:
        </p>

        <pre>
        <x-torchlight-code language='php'>
            namespace App\Http\Middleware; // [tl! focus]

            use Closure;
            use Illuminate\Http\Request;
            use Illuminate\Support\Facades\Log;
            use Symfony\Component\HttpFoundation\Response;

            class CloudWatchContextMiddleware // [tl! focus]
            {
                /**
                * Handle an incoming request.
                *
                * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
                */
                public function handle(Request $request, Closure $next): Response // [tl! focus]
                { // [tl! focus]
                    Log::shareContext([ // [tl! focus] 
                        'email' => $request->user()?->email, // [tl! focus]
                        'ip' => $request->ip(), // [tl! focus] 
                        'via' => $request->expectsJson() ? 'api' : 'web', // [tl! focus]
                        'user_agent' => $request->userAgent(), // [tl! focus]
                    ]); // [tl! focus]

                    return $next($request); // [tl! focus]
                } // [tl! focus]
            }
        </x-torchlight-code>
        </pre>

        <p class="mt-4 text-left text-lg text-white/85">
            In this example, we're adding the context to the request in the middleware. This context will be shared with
            all log messages within the request lifecycle.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            You can add this middleware to the <code class="rounded-md bg-gray-900 p-1 text-sm text-white">web</code>
            middleware group in your <code
                class="rounded-md bg-gray-900 p-1 text-sm text-white">bootstrap/app.php</code> file:
        </p>

        <pre>
        <x-torchlight-code language='php'>
            // use App\Http\Middleware\CloudWatchContextMiddleware;

            return Application::configure(basePath: dirname(__DIR__))
                ->withProviders()
                ->withRouting(
                    web: __DIR__.'/../routes/web.php',
                    commands: __DIR__.'/../routes/console.php',
                    health: '/status',
                )
                ->withMiddleware(function (Middleware $middleware) { // [tl! focus]
                    $middleware->web([ // [tl! focus]
                        CloudWatchContextMiddleware::class, // [tl! focus]
                    ]); // [tl! focus]
                })// [tl! focus]
                ->withExceptions(function (Exceptions $exceptions) {
                    Integration::handles($exceptions);
                })->create();
        </x-torchlight-code>
        </pre>

        <p class="mt-4 text-left text-lg text-white/85">
            Ensure that you add it to the <code class="rounded-md bg-gray-900 p-1 text-sm text-white">web</code>
            middleware group to share authentication context with all web requests. Otherwise, at a base middleware
            level, it will miss user identifying context like email or user ID.
        </p>

        <h2 class="mt-8 text-2xl font-bold text-white">Logging to AWS CloudWatch</h2>

        <p class="mt-4 text-left text-lg text-white/85">
            Laravel Vapor makes it easy to log to AWS CloudWatch. Laravel Vapor uses CloudWatch by default to log your
            application's output. If you are outside of Vapor, you can use the <a
                href="https://github.com/pagevamp/laravel-cloudwatch-logs"
                class="text-blue-400 hover:underline">laravel-cloudwatch-logs</a> package to log to CloudWatch.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            To log to CloudWatch, you may need to set up the necessary permissions in your AWS account and configure the
            package with your AWS credentials.
        </p>

        <h2 class="mt-8 text-2xl font-bold text-white">Using the AWS CloudWatch Log Insights</h2>

        <p class="mt-4 text-left text-lg text-white/85">
            Once you're logging to CloudWatch, you can use the CloudWatch Log Insights feature to query and analyze your
            logs. Log Insights allows you to run queries on your logs to gain insights into your application's behavior.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            For example, you can use Log Insights to query all successful authentication logs and see how many users are
            logging in each day. This can help you identify patterns and trends in your application's usage.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            In this example, we're querying the logs for successful authentications and grouping them by the method of
            authentication (web or API) and the time of day.
        </p>

        <pre>
        <x-torchlight-code language='sql'>
            fields @timestamp, @message
            | filter @message like "[AUTH] Successful Authentication"
            | fields coalesce(context.via, "unknown") as via
            | parse via "web" as web_request
            | parse via "api" as api_request
            | stats count(*) as Total_Authentications, count(web_request) as Web_Authentications, count(api_request) as API_Authentications by bin(15m)
        </x-torchlight-code>
        </pre>

        <h2 class="mt-8 text-2xl font-bold text-white">Creating a Dashboard</h2>

        <p class="mt-4 text-left text-lg text-white/85">
            Once you have your queries set up, you can create a dashboard in CloudWatch to visualize your logs.
            Dashboards allow you to create custom visualizations of your log data, such as line charts, bar charts, and
            pie charts.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            From a saved query, you can use the "Add to dashboard" button to create a new widget on your dashboard. You
            can then customize the widget to display the data in the way you want. Just ensure the data is in the
            correct format for the given visualization.
        </p>

        <h2 class="mt-8 text-2xl font-bold text-white">All Set!</h2>

        <p class="mt-4 text-left text-lg text-white/85">
            That's it! You're now deeply monitoring your Laravel events with AWS CloudWatch. By logging your events and
            analyzing them with CloudWatch, you can gain insights into your application's performance and behavior.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            Feel free to add more events to your logging system to gain even more insights into your application. The
            more events you log, the more context you'll have about what's happening in your application.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            AWS CloudWatch is affordable with a generous free tier, so you can get started with logging your events
            without breaking the bank. Give it a try and see how it can help you monitor your Laravel application.
        </p>

        <p class="mt-4 text-left text-lg text-white/85">
            Happy logging!
        </p>

    </div>
</x-app>
