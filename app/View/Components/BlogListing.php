<?php

namespace App\View\Components;

use App\View\Components\Concerns\InteractsWithBlogPosts;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogListing extends Component
{
    use InteractsWithBlogPosts;

    public function render(): View|Closure|string
    {
        return view('components.blog-listing', [
            'posts' => $this->resolvePosts(),
        ]);
    }
}
