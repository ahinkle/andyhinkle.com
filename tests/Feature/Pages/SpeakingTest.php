<?php

use App\Models\Speaking;

use function Pest\Laravel\get;

it('loads speaking page', function () {
    get('/speaking')
        ->assertOk()
        ->assertSee('About Us');
});

it('loads speaking pages', function () {
    $speakings = Speaking::all();

    foreach ($speakings as $speaking) {
        $this->get("/speaking/{$speaking->slug}")
            ->assertOk();
    }
});
