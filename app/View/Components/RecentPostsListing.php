<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentPostsListing extends Component
{
    public function render(): View|Closure|string
    {
        return view('components.recent-posts-listing', [
            'posts' => Post::query()->latest('published_at')->take(3)->get(),
        ]);
    }
}
