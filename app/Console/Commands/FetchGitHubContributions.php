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
    public function handle()
    {
        $this->info('Fetching GitHub Contributions...');

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
            })
        );
    }

    protected function fetchGitHubPublicPullRequests()
    {
        $data = Http::withToken('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')
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
