<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

use function Pest\Laravel\artisan;

it('fetches and caches GitHub contributions', function (): void {
    fake_successful_github_response();

    artisan('fetch:github-contributions')
        ->expectsOutput('GitHub contributions fetched successfully.')
        ->assertExitCode(0);

    expect(Cache::get('github_contributions'))
        ->not()
        ->toBeNull();
});

function fake_successful_github_response()
{
    Http::fake([
        'api.github.com/graphql' => Http::response([
            'data' => [
                'user' => [
                    'pullRequests' => [
                        'nodes' => [
                            [
                                'title' => 'Test PR',
                                'url' => 'https://github.com/test/repo/pull/1',
                                'mergedAt' => '2024-01-01T00:00:00Z',
                                'bodyText' => 'Test PR description',
                                'additions' => 10,
                                'deletions' => 5,
                                'repository' => [
                                    'name' => 'repo',
                                    'isPrivate' => false,
                                    'owner' => [
                                        'login' => 'test',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]),
    ]);
}
