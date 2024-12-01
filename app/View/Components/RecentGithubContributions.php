<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class RecentGithubContributions extends Component
{
    public Collection $contributions;

    public function __construct()
    {
        $this->contributions = $this->getContributions();
    }

    public function render(): View|Closure|string
    {
        return view('components.recent-github-contributions', [
            'contributions' => $this->contributions,
            'count' => $this->contributions->count(),
        ]);
    }

    protected function getContributions(): Collection
    {
        $contributions = Cache::get('github_contributions', []);

        return $this->formatContributions($contributions);
    }

    protected function formatContributions(array $contributions): Collection
    {
        return collect($contributions)->map(function ($contribution): array {
            return [
                'title' => (string) ($contribution['title'] ?? ''),
                'url' => (string) ($contribution['url'] ?? ''),
                'merged_at' => isset($contribution['mergedAt']) ? Carbon::parse($contribution['mergedAt']) : Carbon::now(),
                'body' => (string) ($contribution['bodyText'] ?? ''),
                'additions' => (int) ($contribution['additions'] ?? 0),
                'deletions' => (int) ($contribution['deletions'] ?? 0),
                'repository' => (string) ($contribution['repository']['name'] ?? ''),
                'owner' => (string) ($contribution['repository']['owner']['login'] ?? ''),
                'avatar_url' => isset($contribution['repository']['owner']['login'])
                    ? 'https://github.com/'.$contribution['repository']['owner']['login'].'.png'
                    : '',
            ];
        });
    }
}
