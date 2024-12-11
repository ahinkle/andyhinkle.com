<?php

use function Pest\Laravel\get;

it('loads landing page', function () {
    get('/blog')
        ->assertOk()
        ->assertSee('Just Try It');
});

it('successfully loads each blog post', function () {
    collect(glob(resource_path('views/pages/blog/*.blade.php')))
        ->map(fn ($file) => str_replace('.blade.php', '', pathinfo($file, PATHINFO_BASENAME)))
        ->each(fn ($slug) => $this->get('/blog/'.$slug)->assertOk());
});
