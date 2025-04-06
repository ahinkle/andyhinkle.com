<?php

use function Pest\Laravel\get;

it('loads home', function (): void {
    get('/')
        ->assertOk()
        ->assertSee('About');
});

it('loads gear', function (): void {
    get('/gear')
        ->assertOk()
        ->assertSee('Hardware');
});

it('redirects wp admin for teh memes', function (): void {
    get('/wp-admin')
        ->assertRedirect();
});
