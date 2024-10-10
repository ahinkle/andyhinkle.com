<?php

namespace App\View\Components;

use Closure;
use InteractsWithBlogPosts;
use Illuminate\Support\Carbon;
use Illuminate\View\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

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
