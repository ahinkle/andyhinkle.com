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
        return $this->markdown('llms.index', [
            'posts' => Post::query()->get(),
            'speaking' => Speaking::query()->get(),
        ]);
    }

    public function full(): Response
    {
        return $this->markdown('llms.full', [
            'posts' => Post::query()->get(),
        ]);
    }

    /** @param array<string, mixed> $data */
    protected function markdown(string $view, array $data): Response
    {
        return response()->view($view, $data, 200, [
            'Content-Type' => 'text/plain; charset=UTF-8',
        ]);
    }
}
