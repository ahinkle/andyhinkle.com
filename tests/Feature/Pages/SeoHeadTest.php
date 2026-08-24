<?php

use App\Models\Post;
use App\Models\Speaking;

use function Pest\Laravel\get;

it('renders the default head metadata on the home page', function (): void {
    get('/')
        ->assertOk()
        ->assertSeeHtml('<title>Andy Hinkle | Software Developer</title>')
        ->assertSeeHtml('rel="canonical"')
        ->assertSeeHtml('<meta name="robots" content="all">')
        ->assertSeeHtml('property="og:site_name" content="Andy Hinkle, Laravel Developer"')
        ->assertSeeHtml('name="twitter:site" content="@andyhnk"')
        ->assertSeeHtml('"@type":"WebSite"')
        ->assertSeeHtml('"@type":"Person"');
});

it('renders listing page titles with the site suffix', function (string $uri, string $title): void {
    get($uri)
        ->assertOk()
        ->assertSeeHtml("<title>{$title} | Andy Hinkle</title>");
})->with([
    ['/blog', 'Blog'],
    ['/speaking', 'Speaking'],
    ['/gear', 'Gear'],
]);

it('renders article metadata on blog posts', function (): void {
    $post = Post::query()->firstOrFail();

    get("/blog/{$post->slug}")
        ->assertOk()
        ->assertSeeHtml("<title>{$post->title} | Andy Hinkle</title>")
        ->assertSeeHtml('property="og:type" content="article"')
        ->assertSeeHtml("images/share/og/blog/{$post->slug}.png")
        ->assertSeeHtml('name="twitter:card" content="summary_large_image"')
        ->assertSeeHtml('property="article:published_time"')
        ->assertSeeHtml('"@type":"BlogPosting"')
        ->assertSeeHtml('rel="canonical"');
});

it('renders podcast episode metadata on speaking pages', function (): void {
    $episode = Speaking::podcasts()->firstOrFail();

    get("/speaking/{$episode->slug}")
        ->assertOk()
        ->assertSeeHtml("<title>{$episode->title} | Andy Hinkle</title>")
        ->assertSeeHtml('property="og:type" content="article"')
        ->assertSeeHtml("images/share/og/speaking/{$episode->slug}.png")
        ->assertSeeHtml('"@type":"PodcastEpisode"');
});

it('renders noindex error metadata on missing pages', function (): void {
    get('/this-page-does-not-exist')
        ->assertNotFound()
        ->assertSeeHtml('<title>Page Not Found | Andy Hinkle</title>')
        ->assertSeeHtml('<meta name="robots" content="noindex, follow">');
});
