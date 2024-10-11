<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class FetchGitHubContributions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:github-contributions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch recent GitHub contributions and stores them in cache';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Fetching GitHub Contributions...');

        Cache::forget('github_contributions');

        Cache::rememberForever('github_contributions', fn () => $this->fetchGitHubPublicPullRequests());

        $this->info('GitHub Contributions Fetched Successfully:');

        $this->table(
            ['Repository', 'Title', 'Merged At', 'Additions', 'Deletions'],
            collect(Cache::get('github_contributions'))->map(function ($contribution) {
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

    /**
     * Fetch GitHub public pull requests.
     *
     * @return array<mixed>
     */
    protected function fetchGitHubPublicPullRequests(): array
    {
        $data = Http::withToken(config('services.github.token'))
            ->post('https://api.github.com/graphql', [
                'query' => $this->graphql(),
                'variables' => [
                    'username' => 'ahinkle',
                ],
            ]);

        if ($data->failed()) {
            throw new \Exception('Failed to fetch GitHub contributions');
        }

        $data = $data->json();

        return $data['data']['user']['pullRequests']['nodes'];
    }

    protected function graphql(): string
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
