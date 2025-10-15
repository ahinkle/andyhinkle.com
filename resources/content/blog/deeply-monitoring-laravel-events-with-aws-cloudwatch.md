---
title: "Deeply Monitoring Laravel Events with AWS CloudWatch"
description: "How to deeply monitor Laravel events with AWS CloudWatch (and Laravel Vapor) to gain insights into your application's performance and behavior."
published_at: "2024-09-04"
---

When you're deploying with services like Laravel Vapor, paired with AWS services like CloudWatch, you have powerful tools at your disposal to gain deep insights into your application's events and behaviors.

## Default logging isn't enough for your Applications

You get an email from the client, "We've received a report that a user cannot reset their password. The password reset email link isn't working. They click the link, but nothing happens."

First stop: the logs. You sift through them, expecting to find a red flag or exception. But instead, it's business as usual—no errors, no anomalies.

Next, you dive into the database, zeroing in on the `password_reset_tokens` table. Sure enough, you find fresh entries—evidence that password reset requests are being processed as expected.

Then, we look at SES. The emails are going out and the users are receiving them, so the email delivery isn't the culprit.

Curious about the email content - *what did that link look like?* Well, that's where things get tricky. Since the emails are sent via SES, there's no record of the content on your end. You're flying blind.

Returning to the database, we see the reset record but now the password reset token is expired, having been generated days ago. So we cannot replicate the issue.

You're left scratching your head, *"What could be the issue? Did the user wait too long? Was it their email client? Did they even click the link?*

This is a common scenario when you're debugging issues in production. You have the logs, but they don't provide enough context to understand the issue.

*"If only I could see what the user did..."*, how many times have you said that as a developer?

## Use the Events to your advantage

Laravel has many default events that fire during the application's lifecycle. These events are the perfect opportunity to gain insights into your application's behavior. By logging these events, you can see what's happening in your application in real-time.

Let's look at a few:

- `Illuminate\Auth\Events\Login` - fired when a user logs in
- `Illuminate\Auth\Events\Logout` - fired when a user logs out
- `Illuminate\Auth\Events\PasswordReset` - fired when a user resets their password
- `Illuminate\Auth\Events\Registered` - fired when a user registers
- `Illuminate\Auth\Events\Attempting` - fired when a user attempts to log in
- `Illuminate\Foundation\Http\Events\RequestHandled` - fired when a request is handled by the application
- `Illuminate\Database\Events\QueryExecuted` - fired when a database query is executed

These events provide lots of context about what's happening in your application. By logging them, you can gain insights into your application's performance and behavior.

## How to globally log Laravel Events

Laravel makes it easy to log events using the built-in event system. You can create listeners for events and log them to your preferred logging service.

The easiest way to add these listeners is in your `AppServiceProvider.php`. Here's an example of how you can log the `Login` event:

```php
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
        Event::listen(Login::class, function (Login $event) {
            Log::info('Successful Authentication', [
                'user_id' => $event->user->id,
                'email' => $event->user->email,
            ]);
        });
    }
}
```

In this example, we're listening for the `Login` event and logging the user's ID and email address.

Which in return, the log will look like this:

```php
[2024-08-22 09:00:00] local.INFO: Successful Authentication {"user_id":1,"email":"test@example.com"}
```

This looks okay, but I like to prefix my logs with a group name to make it easier to filter and it's consistent across all authentication-related logs.

```php
Log::info('[AUTH] Successful Authentication', [
    'user_id' => $event->user->id,
    'email' => $event->user->email,
]);
```

## The Power of Shared Context

In Laravel 11, Laravel core team member [Tim MacDonald](https://github.com/timacdonald) introduced [Context](https://github.com/laravel/framework/pull/49730) to logging. This feature allows you to add context to your logs, making it easier to filter and search for specific logs.

In the example above, I added context to the log message with the second parameter of the `Log::info` method. This context is an array of additional data that you want to include in the log message.

The real magic happens when you use the `Log::withContext` method. This method allows you to add context to all log messages within a given closure.

```php
Log::shareContext([
    'email' => $request->user()?->email,
    'ip' => $request->ip(),
    'via' => $request->expectsJson() ? 'api' : 'web',
    'user_agent' => $request->userAgent(),
]);
```

In this example, we're sharing context with all log messages within the closure. This means that the `email`, `ip`, `via`, and `user_agent` fields will be added to all log messages within the closure.

Now we can remove the context in the middle of the code from the log message and let Laravel handle it for us. This allows us to have consistent context across all log messages.

```php
Log::info('[AUTH] Successful Authentication');
```

The log message will now look like this:

```php
[2024-08-22 09:00:00] local.INFO: [AUTH] Successful Authentication {"email":" foo@bar.com","ip":"xxx.xx.xxx.xx","via":"web","user_agent":"Mozilla/5.0"}
```

## Adding Context to all Logs

You can add the `sharedContext` to all log messages by creating a middleware that adds the context to the request:

```php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CloudWatchContextMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::shareContext([
            'email' => $request->user()?->email,
            'ip' => $request->ip(),
            'via' => $request->expectsJson() ? 'api' : 'web',
            'user_agent' => $request->userAgent(),
        ]);

        return $next($request);
    }
}
```

In this example, we're adding the context to the request in the middleware. This context will be shared with all log messages within the request lifecycle.

You can add this middleware to the `web` middleware group in your `bootstrap/app.php` file:

```php
// use App\Http\Middleware\CloudWatchContextMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withProviders()
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/status',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web([
            CloudWatchContextMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        Integration::handles($exceptions);
    })->create();
```

Ensure that you add it to the `web` middleware group to share authentication context with all web requests. Otherwise, at a base middleware level, it will miss user identifying context like email or user ID.

## Logging to AWS CloudWatch

Laravel Vapor makes it easy to log to AWS CloudWatch. Laravel Vapor uses CloudWatch by default to log your application's output. If you are outside of Vapor, you can use the [laravel-cloudwatch-logs](https://github.com/pagevamp/laravel-cloudwatch-logs) package to log to CloudWatch.

To log to CloudWatch, you may need to set up the necessary permissions in your AWS account and configure the package with your AWS credentials.

## Using the AWS CloudWatch Log Insights

Once you're logging to CloudWatch, you can use the CloudWatch Log Insights feature to query and analyze your logs. Log Insights allows you to run queries on your logs to gain insights into your application's behavior.

For example, you can use Log Insights to query all successful authentication logs and see how many users are logging in each day. This can help you identify patterns and trends in your application's usage.

In this example, we're querying the logs for successful authentications and grouping them by the method of authentication (web or API) and the time of day.

```sql
fields @timestamp, @message
| filter @message like "[AUTH] Successful Authentication"
| fields coalesce(context.via, "unknown") as via
| parse via "web" as web_request
| parse via "api" as api_request
| stats count(*) as Total_Authentications, count(web_request) as Web_Authentications, count(api_request) as API_Authentications by bin(15m)
```

## Creating a Dashboard

Once you have your queries set up, you can create a dashboard in CloudWatch to visualize your logs. Dashboards allow you to create custom visualizations of your log data, such as line charts, bar charts, and pie charts.

From a saved query, you can use the "Add to dashboard" button to create a new widget on your dashboard. You can then customize the widget to display the data in the way you want. Just ensure the data is in the correct format for the given visualization.

## All Set!

That's it! You're now deeply monitoring your Laravel events with AWS CloudWatch. By logging your events and analyzing them with CloudWatch, you can gain insights into your application's performance and behavior.

Feel free to add more events to your logging system to gain even more insights into your application. The more events you log, the more context you'll have about what's happening in your application.

AWS CloudWatch is affordable with a generous free tier, so you can get started with logging your events without breaking the bank. Give it a try and see how it can help you monitor your Laravel application.

Happy logging!
