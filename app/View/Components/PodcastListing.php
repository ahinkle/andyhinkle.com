<?php

namespace App\View\Components;

use App\Models\Speaking;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PodcastListing extends Component
{
    public function render(): View|Closure|string
    {
        return view('components.podcast-listing', [
            'podcasts' => cache('podcast_listing', fn () => Speaking::all()),
        ]);
    }
}
