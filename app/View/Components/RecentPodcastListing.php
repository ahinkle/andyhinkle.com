<?php

namespace App\View\Components;

use App\View\Components\Concerns\InteractsWithPodcasts;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentPodcastListing extends Component
{
    use InteractsWithPodcasts;

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recent-podcast-listing', [
            'podcasts' => $this->resolvePodcasts()->take(3),
        ]);
    }
}
