<?php

namespace App\View\Components;

use App\View\Components\Concerns\InteractsWithBlogPosts;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentPostsListing extends Component
{
    use InteractsWithBlogPosts;

    public function render(): View|Closure|string
    {
        return view('components.recent-posts-listing', [
            'posts' => $this->resolvePosts()->take(3),
        ]);
    }
}
