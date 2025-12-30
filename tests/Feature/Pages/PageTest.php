<?php

use function Pest\Laravel\get;

it('loads home', function (): void {
    get('/')
        ->assertOk()
        ->assertSee('Andy Hinkle');
});

it('loads gear', function (): void {
    get('/gear')
        ->assertOk()
        ->assertSee('Hardware');
});
