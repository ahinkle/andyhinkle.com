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
                'variables' => [
                    'username' => 'ahinkle',
                ],
            ]);

        $data = $response->json();

        if (! is_array($data)) {
            return [];
        }

        $dataLevel = $data['data'] ?? null;

        if (! is_array($dataLevel)) {
            return [];
        }

        $user = $dataLevel['user'] ?? null;

        if (! is_array($user)) {
            return [];
        }

        $pullRequests = $user['pullRequests'] ?? null;

        if (! is_array($pullRequests)) {
            return [];
        }

        $nodes = $pullRequests['nodes'] ?? null;

        return is_array($nodes) ? $nodes : [];
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
