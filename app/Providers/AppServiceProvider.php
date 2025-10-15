<?php

namespace App\Providers;

use Override;
use Illuminate\Foundation\Http\Events\RequestHandled;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    #[Override]
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(RequestHandled::class, function (RequestHandled $event): void {
            Log::info('[HTTP] Request Handled', [
                'method' => $event->request->method(),
                'uri' => $event->request->path(),
                'ip' => $event->request->ip(),
                'user_agent' => $event->request->userAgent(),
            ]);
        });
    }
}
