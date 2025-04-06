<?php

use App\Models\Speaking;

use function Pest\Laravel\get;

it('loads speaking page', function (): void {
    get('/speaking')
        ->assertOk()
        ->assertSee('About Us');
});

it('loads speaking pages', function (): void {
    $speakings = Speaking::all();

    foreach ($speakings as $speaking) {
        $this->get("/speaking/{$speaking->slug}")
            ->assertOk();
    }
});
