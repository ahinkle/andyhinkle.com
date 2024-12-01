<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class FetchGitHubContributions extends Command
{
    protected $signature = 'fetch:github-contributions';

    protected $description = 'Fetch recent GitHub contributions and stores them in cache';

    public function handle(): int
    {
        $this->info('Fetching GitHub Contributions...');

        $data = tap($this->fetchGitHubPublicPullRequests(),
            fn ($data) => Cache::put('github_contributions', $data, now()->addDay())
        );

        $this->table(
            ['Repository', 'Title', 'Merged At', 'Additions', 'Deletions'],
            collect($data)->map(function ($contribution) {
                return [
                    $contribution['repository']['owner']['login'].'/'.$contribution['repository']['name'],
                    $contribution['title'],
                    $contribution['mergedAt'],
                    $contribution['additions'],
                    $contribution['deletions'],
                ];
            }),
        );

        return 0;
    }

    protected function fetchGitHubPublicPullRequests(): array
    {
        $data = Http::withToken(config('services.github.token'))
            ->throw()
            ->post('https://api.github.com/graphql', [
                'query' => $this->graphqlPullRequestQuery(),
                'variables' => [
                    'username' => 'ahinkle',
                ],
            ]);

        return $data->json()['data']['user']['pullRequests']['nodes'];
    }

    protected function graphqlPullRequestQuery(): string
    {
        return <<<'GRAPHQL'
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
    }
}
