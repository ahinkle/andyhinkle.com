<?php

namespace Tests\Feature;

use Tests\TestCase;

class BlogTest extends TestCase
{
    public function test_it_loads_blog_landing_page(): void
    {
        $this->get('/blog')
            ->assertOk()
            ->assertSee('Just Try It');
    }

    public function test_each_blog_post_successfully_loads(): void
    {
        // TODO: Mock Torchlight.. thx aaron.
        collect(glob(resource_path('views/pages/blog/*.blade.php')))
            ->map(fn ($file) => str_replace('.blade.php', '', pathinfo($file, PATHINFO_BASENAME)))
            ->each(fn ($slug) => $this->get('/blog/'.$slug)->assertOk());
    }
}
