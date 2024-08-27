<?php

namespace Tests\Pages;

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

    public function test_redirects_wp_admin_for_teh_memes(): void
    {
        $this->get('/wp-admin')
            ->assertRedirect();
    }
}
