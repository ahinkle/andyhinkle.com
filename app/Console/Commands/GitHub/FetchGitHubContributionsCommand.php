<?php

namespace App\Console\Commands\GitHub;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class FetchGitHubContributionsCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'fetch:github-contributions';

    /**
     * @var string
     */
    protected $description = 'Fetch recent GitHub contributions and stores them in cache';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Fetching GitHub Contributions...');

        $data = tap($this->fetchGitHubPublicPullRequests(),
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
        $token = config('services.github.token');

        if (! is_string($token)) {
            return [];
        }

        $response = Http::withToken($token)
            ->throw()
            ->post('https://api.github.com/graphql', [
                'query' => $this->graphqlPullRequestQuery(),
            ]);

        $data = $response->json();

        if (! is_array($data)) {
            return [];
        }

        $dataLevel = $data['data'] ?? null;

        if (! is_array($dataLevel)) {
            return [];
        }

        $search = $dataLevel['search'] ?? null;

        if (! is_array($search)) {
            return [];
        }

        $nodes = $search['nodes'] ?? null;

        if (! is_array($nodes)) {
            return [];
        }

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
