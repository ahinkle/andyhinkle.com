<?php

use function Pest\Laravel\get;

it('loads home', function () {
    get('/')
        ->assertOk()
        ->assertSee('About');
});

it('loads gear', function () {
    get('/gear')
        ->assertOk()
        ->assertSee('Hardware');
});

it('redirects wp admin for teh memes', function () {
    get('/wp-admin')
        ->assertRedirect();
});
