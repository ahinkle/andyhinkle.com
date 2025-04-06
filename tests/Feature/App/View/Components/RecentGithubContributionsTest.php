<?php

use Illuminate\Support\Facades\Cache;

it('formats contributions correctly', function (): void {
    $mockContributions = [
        [
            'title' => 'Test PR',
            'url' => 'https://github.com/test/repo/pull/1',
            'mergedAt' => '2024-01-01T12:00:00Z',
            'bodyText' => 'This is a test PR',
            'additions' => 100,
            'deletions' => 50,
            'repository' => [
                'name' => 'test-repo',
                'owner' => [
                    'login' => 'test-user',
                ],
            ],
        ],
    ];

    Cache::shouldReceive('get')
        ->with('github_contributions', [])
        ->once()
        ->andReturn($mockContributions);

    $this->blade('<x-recent-github-contributions />')
        ->assertSee('Test PR')
        ->assertSee('This is a test PR')
        ->assertSee('test-repo')
        ->assertSee('test-user');
});
