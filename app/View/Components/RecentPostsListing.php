<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\View\Components\Concerns\InteractsWithBlogPosts;

class RecentPostsListing extends Component
{
    use InteractsWithBlogPosts;

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recent-posts-listing', [
            'posts' => $this->resolvePosts()->take(3),
        ]);
    }
}
