<?php

use App\Jobs\BanIpOnCloudflare;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Schema;

beforeEach(function (): void {
    Queue::fake();
    Cache::flush();
});

it('dispatches ban job for wp-admin requests in production', function (): void {
    app()->detectEnvironment(fn () => 'production');

    $this->get('/wp-admin')
        ->assertForbidden();

    Queue::assertPushed(BanIpOnCloudflare::class, fn ($job): bool => $job->reason === 'WordPress probe detected');
});

it('dispatches ban job for wp-login requests in production', function (): void {
    app()->detectEnvironment(fn () => 'production');

    $this->get('/wp-login.php')
        ->assertForbidden();

    Queue::assertPushed(BanIpOnCloudflare::class);
});

it('dispatches ban job for wp-includes requests in production', function (): void {
    app()->detectEnvironment(fn () => 'production');

    $this->get('/wp-includes/some-file.php')
        ->assertForbidden();

    Queue::assertPushed(BanIpOnCloudflare::class);
});

it('tracks 404 errors and bans after threshold in production', function (): void {
    app()->detectEnvironment(fn () => 'production');

    for ($i = 1; $i <= 4; $i++) {
        $this->get('/nonexistent-page-'.$i)
            ->assertNotFound();

        Queue::assertNotPushed(BanIpOnCloudflare::class);
    }

    $this->get('/nonexistent-page-5')
        ->assertNotFound();

    Queue::assertPushed(BanIpOnCloudflare::class, fn ($job): bool => str_contains((string) $job->reason, 'Exceeded 404 threshold'));
});

it('does not track 404s in non-production environments', function (): void {
    app()->detectEnvironment(fn () => 'local');

    for ($i = 1; $i <= 10; $i++) {
        $this->get('/nonexistent-page-'.$i)
            ->assertNotFound();
    }

    Queue::assertNotPushed(BanIpOnCloudflare::class);
});

it('does not ban wp-admin in non-production environments', function (): void {
    app()->detectEnvironment(fn () => 'local');

    $this->get('/wp-admin')
        ->assertNotFound();

    Queue::assertNotPushed(BanIpOnCloudflare::class);
});

it('clears 404 count after banning', function (): void {
    app()->detectEnvironment(fn () => 'production');

    for ($i = 1; $i <= 5; $i++) {
        $this->get('/nonexistent-page-'.$i);
    }

    expect(Cache::get('ip_404_count:127.0.0.1'))->toBeNull();
});

it('dispatches the ban job only once per ip', function (): void {
    app()->detectEnvironment(fn () => 'production');

    $this->get('/wp-admin')->assertForbidden();
    $this->get('/wp-login.php')->assertForbidden();

    Queue::assertPushed(BanIpOnCloudflare::class, 1);
});

it('does not dispatch another ban job when a banned ip keeps hitting 404s', function (): void {
    app()->detectEnvironment(fn () => 'production');

    for ($i = 1; $i <= 10; $i++) {
        $this->get('/nonexistent-page-'.$i)->assertNotFound();
    }

    Queue::assertPushed(BanIpOnCloudflare::class, 1);
});

it('bans after the 404 threshold when using the database cache store', function (): void {
    config([
        'database.connections.cache_testing' => [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
            'foreign_key_constraints' => true,
        ],
        'cache.stores.database.connection' => 'cache_testing',
        'cache.default' => 'database',
    ]);

    Schema::connection('cache_testing')->create('cache', function (Blueprint $table): void {
        $table->string('key')->primary();
        $table->mediumText('value');
        $table->integer('expiration');
    });

    Schema::connection('cache_testing')->create('cache_locks', function (Blueprint $table): void {
        $table->string('key')->primary();
        $table->string('owner');
        $table->integer('expiration');
    });

    app()->detectEnvironment(fn () => 'production');

    for ($i = 1; $i <= 5; $i++) {
        $this->get('/nonexistent-page-'.$i)->assertNotFound();
    }

    Queue::assertPushed(BanIpOnCloudflare::class, 1);
});
