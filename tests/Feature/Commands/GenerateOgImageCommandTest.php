<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;

use function Pest\Laravel\artisan;

beforeEach(function (): void {
    $this->publicPath = storage_path('framework/testing/og-public');

    File::ensureDirectoryExists($this->publicPath);

    app()->usePublicPath($this->publicPath);
});

afterEach(function (): void {
    File::deleteDirectory($this->publicPath);
});

it('rejects an unknown type', function (): void {
    artisan('og:image', ['--type' => 'podcast'])
        ->expectsOutput('The --type option must be blog, speaking, or all.')
        ->assertExitCode(1);
});

it('generates a custom image with a wrapped title', function (): void {
    artisan('og:image', ['--custom' => true])
        ->expectsQuestion('What should the filename be?', 'custom-test')
        ->expectsQuestion('What text should be overlaid on the image?', 'A Long Enough Title That It Has To Wrap Onto Another Line\nWith A Manual Break')
        ->expectsOutput('OG image created successfully at: public/images/share/og/custom-test.png')
        ->assertExitCode(0);

    expect(File::exists(public_path('images/share/og/custom-test.png')))->toBeTrue();
});

it('generates images for only the requested type', function (): void {
    artisan('og:image', ['--type' => 'blog'])
        ->expectsOutput('Processing blog...')
        ->doesntExpectOutput('Processing speaking...')
        ->assertExitCode(0);

    expect(File::files(public_path('images/share/og/blog')))->toHaveCount(Post::count())
        ->and(File::isDirectory(public_path('images/share/og/speaking')))->toBeFalse();
});
