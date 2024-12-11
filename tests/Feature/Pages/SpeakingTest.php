<?php

use function Pest\Laravel\get;

it('loads speaking page', function () {
    get('/speaking')
        ->assertOk()
        ->assertSee('About Us');
});

it('loads all podcast pages', function () {
    collect(glob(resource_path('views/pages/speaking/*.blade.php')))
        ->map(fn ($file) => str_replace('.blade.php', '', pathinfo($file, PATHINFO_BASENAME)))
        ->each(fn ($slug) => get('/speaking/'.$slug)->assertOk());
});
