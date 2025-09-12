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

        $this->fetchGitHubPublicPullRequests();

        $this->info('GitHub contributions fetched successfully.');

        return self::SUCCESS;
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

        return tap($data->collect('data.user.pullRequests.nodes')->toArray(),
            fn ($pullRequests) => Cache::put('github_contributions', $pullRequests, now()->addDay())
        );
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
