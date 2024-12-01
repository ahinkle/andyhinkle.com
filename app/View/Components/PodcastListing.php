<?php

namespace App\View\Components;

use App\View\Components\Concerns\InteractsWithPodcasts;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PodcastListing extends Component
{
    use InteractsWithPodcasts;

    public function render(): View|Closure|string
    {
        return view('components.podcast-listing', [
            'podcasts' => $this->resolvePodcasts(),
        ]);
    }
}
