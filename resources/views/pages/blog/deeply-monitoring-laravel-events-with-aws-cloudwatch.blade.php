<x-app>
    <x-slot name="seo">
        <title>Deeply Monitoring Laravel Events with AWS CloudWatch</title>
        <meta name="description" content="How to deeply monitor Laravel events with AWS CloudWatch (and Laravel Vapor) to gain insights into your application's performance and behavior." />
        <meta property="og:title" content="Deeply Monitoring Laravel Events with AWS CloudWatch" />
        <meta property="og:description" content="How to deeply monitor Laravel events with AWS CloudWatch (and Laravel Vapor) to gain insights into your application's performance and behavior." />
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "BlogPosting",
                "headline": "Deeply Monitoring Laravel Events with AWS CloudWatch",
                "datePublished": "2024-08-22T09:00:00+08:00",
                "dateModified": "2024-08-22T09:00:00+08:00",
            }
        </script>
    </script>
    </x-slot>

        <a href="/images/blog/aws/aws-cloudwatch-monitoring-laravel-events.png" target="_blank">
        <img src="/images/blog/aws/aws-cloudwatch-monitoring-laravel-events.png" alt="Cloudflare Cache Rules" class="w-full mt-4 mx-auto">
    </a>

    <p class="text-white/75 text-center text-sm py-2 font-sans pt-5">August 22, 2024</p>
    <h1 class="text-3xl md:text-5xl font-bold text-white text-center font-sans">Deeply Monitoring Laravel Events with AWS CloudWatch</h1>


    <div class="max-w-3xl mx-auto mt-8">

        <p class="text-white/85 text-lg text-left text-wrap">
            Monitoring your Laravel application in production is crucial for maintaining performance, reliability, and security. When you're deploying with services like Laravel Vapor, paired with AWS services like CloudWatch, you have powerful tools at your disposal to gain deep insights into your application's events and behaviors.
        </p>

        <h2 class="text-2xl font-bold text-white mt-8">Default logging isn't enough for your Applications</h2>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            You get an email from the client, "We've received a report that a user cannot reset their password. The password reset email link isn't working. They click the link, but nothing happens.".
        </p>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            First stop: the logs. You sift through them, expecting to find a red flag or exception. But instead, it's business as usual—no errors, no anomalies.
        </p>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
           Next, you dive into the database, zeroing in on the <code class="bg-gray-900 p-1 rounded-md text-white text-sm">password_reset_tokens</code> table. Sure enough, you find fresh entries—evidence that password reset requests are being processed as expected.
        </p>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            Then, we look at SES. The emails are going out and the users are receiving them, so the email delivery isn’t the culprit.
        </p>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            Curious about the email content - <span class="italic">what did that link look like?</span> Well, that's where things get tricky. Since the emails are sent via SES, there's no record of the content on your end. You're flying blind. 
        </p>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
          Returning to the database, we see the reset record but now the password reset token is expired, having been generated days ago. So we cannot replicate the issue.
        </p>

        <p class="text-white/85 text-lg text-left text-wrap mt-2">
            You're left scratching your head, <span class="italic">"What could be the issue? Did the user wait too long? Was it their email client? Did they even click the link?</span>
        </p>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            This is a common scenario when you're debugging issues in production. You have the logs, but they don't provide enough context to understand the issue.
        </p>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
           <span class="italic">"If only I could see what the user did..."</span>, how many times have you said that as a developer?</span>
        </p>

        <h2 class="text-2xl font-bold text-white mt-8">Use the Events to your advantage</h2>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            Laravel has many default events that fire during the application's lifecycle. 
            These events are the perfect opportunity to gain insights into your application's behavior. By logging these events, you can see what's happening in your application in real-time.
        </p>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            Let's look at a few:
        </p>

        <ul class="text-white/85 text-lg text-left text-wrap mt-4">
            <li><code class="bg-gray-900 p-1 rounded-md text-white text-sm">Illuminate\Auth\Events\Login</code> - fired when a user logs in</li>
            <li><code class="bg-gray-900 p-1 rounded-md text-white text-sm">Illuminate\Auth\Events\Logout</code> - fired when a user logs out</li>
            <li><code class="bg-gray-900 p-1 rounded-md text-white text-sm">Illuminate\Auth\Events\PasswordReset</code> - fired when a user resets their password</li>
            <li><code class="bg-gray-900 p-1 rounded-md text-white text-sm">Illuminate\Auth\Events\Registered</code> - fired when a user registers</li>
            <li><code class="bg-gray-900 p-1 rounded-md text-white text-sm">Illuminate\Auth\Events\Attempting</code> - fired when a user attempts to log in</li>
            <li><code class="bg-gray-900 p-1 rounded-md text-white text-sm">Illuminate\Foundation\Http\Events\RequestHandled</code> - fired when a request is handled by the application</li>
            <li><code class="bg-gray-900 p-1 rounded-md text-white text-sm">Illuminate\Database\Events\QueryExecuted</code> - fired when a database query is executed</li>
        </ul>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            These events provide lots of context about what's happening in your application. By logging them, you can gain insights into your application's performance and behavior.
        </p>

        <h2 class="text-2xl font-bold text-white mt-8">How to log Laravel Events</h2>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            Laravel makes it easy to log events using the built-in event system. You can create listeners for events and log them to your preferred logging service.
        </p>

        <p class="text-white/85 text-lg text-left text-wrap my-4">
            The easiest way to add these listeners is in your <code class="bg-gray-900 p-1 rounded-md text-white text-sm">AppServiceProvider.php</code>. Here's an example of how you can log the <code class="bg-gray-900 p-1 rounded-md text-white text-sm">Login</code> event:
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
                        Log::info('User logged in', [ // [tl! focus]
                            'user_id' => $event->user->id, // [tl! focus]
                            'email' => $event->user->email, // [tl! focus]
                        ]); // [tl! focus]
                    }); // [tl! focus]
                }
            }
        </x-torchlight-code>
        </pre>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            In this example, we're listening for the <code class="bg-gray-900 p-1 rounded-md text-white text-sm">Login</code> event and logging the user's ID and email address.
        </p>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            Which in return, the log will look like this:
        </p>

        <pre>
        <x-torchlight-code language='php'>
            [2024-08-22 09:00:00] local.INFO: User logged in {"user_id":1,"email":"test@example.com"}
        </x-torchlight-code>
        </pre>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
           This looks okay, but I like to prefix my logs with a group name to make it easier to filter and it's consistent across all authentication-related logs.
        </p>

        <pre>
        <x-torchlight-code language='php'>
            Log::info('[AUTH] Successful Authentication', [ // [tl! focus]
                'user_id' => $event->user->id, 
                'email' => $event->user->email, 
            ]); 
        </x-torchlight-code>
        </pre>

        <h2 class="text-2xl font-bold text-white mt-8">The Power of Shared Context</h2>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            In Laravel 11, Laravel core team member <a href="https://github.com/timacdonald" class="text-blue-400 hover:underline">Tim MacDonald</a> introduced <a href="https://github.com/laravel/framework/pull/49730" class="text-blue-400 hover:underline">Context</a> to logging. This feature allows you to add context to your logs, making it easier to filter and search for specific logs.
        </p>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            In the example above, I added context to the log message with the second parameter of the <code class="bg-gray-900 p-1 rounded-md text-white text-sm">Log::info</code> method. This context is an array of additional data that you want to include in the log message.
        </p>

        <p class="text-white/85 text-lg text-left text-wrap mt-4">
            The real magic happens when you use the <code class="bg-gray-900 p-1 rounded-md text-white text-sm">Log::withContext</code> method. This method allows you to add context to all log messages within a given closure.
        </p>
    </div>
</x-app>
