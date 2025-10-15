<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogListing extends Component
{
    public function render(): View|Closure|string
    {
        return view('components.blog-listing', [
            'posts' => Post::all(),
        ]);
    }
}
