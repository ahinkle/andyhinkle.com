<?php

namespace App\Console\Commands\GitHub;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'fetch:github-contributions', description: 'Fetch recent GitHub contributions and stores them in cache')]
class FetchGitHubContributionsCommand extends Command
{
    public function handle(): int
    {
        $this->info('Fetching GitHub Contributions...');

        $data = tap($this->fetchGitHubPublicPullRequests(),
            fn ($data) => Cache::put('github_contributions', $data, now()->addDay())
        );

        $this->info('GitHub contributions fetched successfully.');

        return Command::SUCCESS;
    }

    /**
     * @return array<mixed>
     */
    protected function fetchGitHubPublicPullRequests(): array
    {
        $token = Config::string('services.github.token');

        /** @var array<mixed> $nodes */
        $nodes = Http::withToken($token)
            ->throw()
            ->post('https://api.github.com/graphql', [
                'query' => $this->graphqlPullRequestQuery(),
            ])
            ->json('data.search.nodes', []);

        // Filter out null entries that sometimes appear in search results
        return array_values(array_filter($nodes, fn ($node) => $node !== null));
    }

    protected function graphqlPullRequestQuery(): string
    {
        return <<<'GRAPHQL'
        query {
          search(query: "is:pr is:merged author:ahinkle -repo:ahinkle/andyhinkle.com", type: ISSUE, first: 10) {
            nodes {
              ... on PullRequest {
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
