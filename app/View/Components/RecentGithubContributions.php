<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class RecentGithubContributions extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recent-github-contributions', [
            'contributions' => $this->contributions(),
            'count' => $this->contributions()->count(),
        ]);
    }

    public function contributions(): mixed
    {
        $contributions = Cache::get('github_contributions');

        return $this->formatContributions($contributions);
    }

    protected function formatContributions($contributions): mixed
    {
        $formatted = collect($contributions)->map(function ($contribution) {
            return [
                'title' => $contribution['title'],
                'url' => $contribution['url'],
                'merged_at' => Carbon::parse($contribution['mergedAt']),
                'body' => $contribution['bodyText'],
                'additions' => $contribution['additions'],
                'deletions' => $contribution['deletions'],
                'repository' => $contribution['repository']['name'],
                'owner' => $contribution['repository']['owner']['login'],
                'avatar_url' => 'https://github.com/'.$contribution['repository']['owner']['login'].'.png',
            ];
        });

        return $formatted;
    }
}
