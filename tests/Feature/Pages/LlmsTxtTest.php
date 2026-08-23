<?php

use App\Models\Post;

use function Pest\Laravel\get;

it('serves an llms.txt index for LLM crawlers', function (): void {
    $post = Post::query()->firstOrFail();

    get('/llms.txt')
        ->assertOk()
        ->assertHeader('Content-Type', 'text/plain; charset=UTF-8')
        ->assertSeeHtml('# Andy Hinkle')
        ->assertSeeHtml('## Blog')
        ->assertSeeHtml("/blog/{$post->slug}")
        ->assertSeeHtml('## Speaking & Podcasts');
});

it('serves llms-full.txt with complete blog post content', function (): void {
    $post = Post::query()->firstOrFail();

    get('/llms-full.txt')
        ->assertOk()
        ->assertHeader('Content-Type', 'text/plain; charset=UTF-8')
        ->assertSeeHtml("## {$post->title}")
        ->assertSeeHtml("/blog/{$post->slug}");
});
