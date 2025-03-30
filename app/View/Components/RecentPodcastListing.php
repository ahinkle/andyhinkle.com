<?php

namespace App\View\Components;

use App\Models\Speaking;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentPodcastListing extends Component
{
    public function render(): View|Closure|string
    {
        return view('components.recent-podcast-listing', [
            'podcasts' => Speaking::take(3)->get(),
        ]);
    }
}
