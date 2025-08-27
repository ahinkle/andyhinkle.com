<?php

namespace App\View\Components;

use App\Models\Speaking;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SpeakingListing extends Component
{
    public function render(): View|Closure|string
    {
        return view('components.speaking-listing', [
            'allContent' => cache('speaking_all', fn () => Speaking::all()),
            'podcasts' => cache('speaking_podcasts', fn () => Speaking::podcasts()->get()),
            'speaking' => cache('speaking_speaking', fn () => Speaking::speaking()->get()),
        ]);
    }
}
