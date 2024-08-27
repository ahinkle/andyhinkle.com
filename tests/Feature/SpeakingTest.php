<?php

namespace Tests\Feature;

use Tests\TestCase;

class SpeakingTest extends TestCase
{
    public function test_it_loads_speaking_page(): void
    {
        $this->get('/speaking')
            ->assertOk()
            ->assertSee('About Us');
    }

    public function test_it_loads_all_podcast_pages(): void
    {
        collect(glob(resource_path('views/pages/speaking/*.blade.php')))
            ->map(fn ($file) => str_replace('.blade.php', '', pathinfo($file, PATHINFO_BASENAME)))
            ->each(fn ($slug) => $this->get('/speaking/'.$slug)->assertOk());
    }
}
