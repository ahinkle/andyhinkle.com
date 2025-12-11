<?php

use App\Models\Post;
use App\Models\Speaking;
use Illuminate\Support\Facades\File;

use function Pest\Laravel\artisan;

beforeEach(function (): void {
    $sitemapPath = public_path('sitemap.xml');
    if (File::exists($sitemapPath)) {
        File::delete($sitemapPath);
    }
});

afterEach(function (): void {
    $sitemapPath = public_path('sitemap.xml');
    if (File::exists($sitemapPath)) {
        File::delete($sitemapPath);
    }
});

it('generates a sitemap successfully', function (): void {
    artisan('sitemap:generate')
        ->expectsOutput('Sitemap generated successfully.')
        ->assertExitCode(0);

    expect(File::exists(public_path('sitemap.xml')))->toBeTrue();
});

it('includes static pages in the sitemap', function (): void {
    artisan('sitemap:generate')->assertExitCode(0);

    $sitemap = File::get(public_path('sitemap.xml'));

    expect($sitemap)
        ->toContain('<loc>'.config('app.url').'</loc>')
        ->toContain('<loc>'.config('app.url').'/blog</loc>')
        ->toContain('<loc>'.config('app.url').'/speaking</loc>')
        ->toContain('<loc>'.config('app.url').'/gear</loc>');
});

it('includes blog posts in the sitemap', function (): void {
    artisan('sitemap:generate')->assertExitCode(0);

    $sitemap = File::get(public_path('sitemap.xml'));

    $posts = Post::withoutGlobalScopes()->get();

    expect($posts)->not()->toBeEmpty();

    foreach ($posts as $post) {
        expect($sitemap)->toContain('<loc>'.config('app.url').'/blog/'.$post->slug.'</loc>');
    }
});

it('includes speaking content in the sitemap', function (): void {
    artisan('sitemap:generate')->assertExitCode(0);

    $sitemap = File::get(public_path('sitemap.xml'));

    $speakingItems = Speaking::withoutGlobalScopes()->get();

    expect($speakingItems)->not()->toBeEmpty();

    foreach ($speakingItems as $item) {
        expect($sitemap)->toContain('<loc>'.config('app.url').'/speaking/'.$item->slug.'</loc>');
    }
});
