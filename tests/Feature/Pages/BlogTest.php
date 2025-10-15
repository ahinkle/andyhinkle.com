<?php

use App\Models\Post;

use function Pest\Laravel\get;

it('loads landing page', function (): void {
    get('/blog')
        ->assertOk()
        ->assertSee('Just Try It');
});

it('successfully loads each blog post', function (): void {
    Post::all()->each(fn (Post $post) => $this->get('/blog/'.$post->slug)->assertOk());
});
