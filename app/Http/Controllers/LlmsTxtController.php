<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Speaking;
use Illuminate\Http\Response;

/**
 * Serves llms.txt documents (https://llmstxt.org) so LLM crawlers and
 * AI search engines can discover and cite the site's content.
 */
class LlmsTxtController
{
    public function index(): Response
    {
        $lines = [
            ...$this->preamble(),
            '## Blog',
            '',
            ...Post::query()->get()->map(
                fn (Post $post): string => sprintf('- [%s](%s): %s', $post->title, url("/blog/{$post->slug}"), $post->description),
            ),
            '',
            '## Speaking & Podcasts',
            '',
            ...Speaking::query()->get()->map(
                fn (Speaking $speaking): string => sprintf('- [%s](%s): %s', $speaking->title, url("/speaking/{$speaking->slug}"), $speaking->summary),
            ),
            '',
            '## Elsewhere',
            '',
            '- [GitHub](https://github.com/ahinkle): Open source work and contributions',
            '- [The Midwest Artisan](https://themidwestartisanpodcast.com/): Podcast co-hosted by Andy Hinkle',
            '- [Bluesky](https://bsky.app/profile/andyhinkle.com): Bluesky profile',
            '- [X / Twitter](https://x.com/andyhnk): X profile',
            '- [LinkedIn](https://www.linkedin.com/in/athinkle): LinkedIn profile',
            '',
        ];

        return $this->plainTextResponse($lines);
    }

    public function full(): Response
    {
        $lines = [
            ...$this->preamble(),
            ...Post::query()->get()->flatMap(fn (Post $post): array => [
                "## {$post->title}",
                '',
                sprintf('URL: %s', url("/blog/{$post->slug}")),
                ...($post->published_at ? [sprintf('Published: %s', $post->published_at->toDateString())] : []),
                '',
                trim($post->content),
                '',
            ]),
        ];

        return $this->plainTextResponse($lines);
    }

    /** @return array<int, string> */
    protected function preamble(): array
    {
        return [
            '# Andy Hinkle',
            '',
            '> Andy Hinkle is a software developer from Santa Claus, Indiana with over 10 years of experience specializing in Laravel, PHP, and JavaScript. He co-hosts The Midwest Artisan podcast and writes about web development.',
            '',
        ];
    }

    /** @param array<int, string> $lines */
    protected function plainTextResponse(array $lines): Response
    {
        return response(implode("\n", $lines), 200, [
            'Content-Type' => 'text/plain; charset=UTF-8',
        ]);
    }
}
