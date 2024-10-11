<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
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

    public function contributions()
    {
        $contributions = Cache::get('github_contributions');

        return $this->formatContributions($contributions);
    }

    protected function formatContributions($contributions)
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

    protected function fetchGithubPublicPullRequests()
    {
        $query = <<<'GRAPHQL'
        query($username: String!) {
          user(login: $username) {
            pullRequests(first: 10, states: [MERGED], orderBy: {field: CREATED_AT, direction: DESC}) {
              nodes {
                title
                url
                mergedAt
                bodyText
                additions
                deletions
                repository {
                  name
                  isPrivate
                  owner {
                    login
                  }
                }
              }
            }
          }
        }
        GRAPHQL;

        $response = cache()->remember('recent-github-contributions', now()->addHours(1), function () use ($query) {
            $data = Http::withToken('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')
                ->post('https://api.github.com/graphql', [
                    'query' => $query,
                    'variables' => [
                        'username' => 'ahinkle',
                    ],
                ]);

            return $data->json();
        });

        return $response['data']['user']['pullRequests']['nodes'];
    }
}
