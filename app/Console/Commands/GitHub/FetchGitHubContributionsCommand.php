<?php

namespace App\Console\Commands\GitHub;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'fetch:github-contributions',
    description: 'Fetch recent GitHub contributions and stores them in cache',
)]
class FetchGitHubContributionsCommand extends Command
{
    public function handle(): int
    {
        $this->info('Fetching GitHub Contributions...');

        tap($this->fetchGitHubPublicPullRequests(),
            fn ($data) => Cache::put('github_contributions', $data, now()->addDay())
        );

        $this->info('GitHub contributions fetched successfully.');

        return 0;
    }

    /**
     * @return array<mixed>
     */
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
