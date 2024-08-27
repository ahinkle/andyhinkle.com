<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_it_loads_home(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('About');
    }

    public function test_it_loads_gear(): void
    {
        $this->get('/gear')
            ->assertOk()
            ->assertSee('Hardware');
    }
}
