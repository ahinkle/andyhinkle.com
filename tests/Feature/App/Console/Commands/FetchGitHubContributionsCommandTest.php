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

it('excludes own repository using github search api', function (): void {
    Http::fake([
        'api.github.com/graphql' => Http::response([
            'data' => [
                'search' => [
                    'nodes' => [
                        [
                            'title' => 'External PR',
                            'url' => 'https://github.com/laravel/framework/pull/123',
                            'mergedAt' => '2024-01-02T00:00:00Z',
                            'bodyText' => 'PR to external repo',
                            'additions' => 20,
                            'deletions' => 10,
                            'repository' => [
                                'name' => 'framework',
                                'isPrivate' => false,
                                'owner' => [
                                    'login' => 'laravel',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]),
    ]);

    artisan('fetch:github-contributions')
        ->expectsOutput('GitHub contributions fetched successfully.')
        ->assertExitCode(0);

    $contributions = Cache::get('github_contributions');

    expect($contributions)
        ->toBeArray()
        ->toHaveCount(1)
        ->and($contributions[0])
        ->toBeArray()
        ->and($contributions[0]['title'])
        ->toBe('External PR')
        ->and($contributions[0]['repository']['name'])
        ->toBe('framework');
});

function fake_successful_github_response()
{
    Http::fake([
        'api.github.com/graphql' => Http::response([
            'data' => [
                'search' => [
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
        ]),
    ]);
}
