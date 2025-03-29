<?php

namespace App\Console\Commands\Speaking;

use App\Models\Speaking;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Fluent;
use Symfony\Component\Yaml\Yaml;

class FetchPodcastsFromTransistorCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'transistor:fetch-podcasts';

    /**
     * @var string
     */
    protected $description = 'Fetch new podcasts from Transistor.fm and save them in storage.';

    public function handle(): void
    {
        $this->fetchPodcasts()
            ->tap(fn (Collection $podcasts) => $this->info("Fetched {$podcasts->count()} podcasts from Transistor.fm."))
            ->each(fn ($podcast) => $this->saveIfNotExists(fluent($podcast)));

        $this->info('Podcasts fetched and saved successfully.');
    }

    protected function fetchPodcasts(): Collection
    {
        return Http::withHeader('x-api-key', config('services.transistor.api_key'))
            ->throw()
            ->get('https://api.transistor.fm/v1/episodes?pagination[per]=250&status=published')
            ->collect('data');
    }

    protected function saveIfNotExists(Fluent $podcast): void
    {
        if (! $this->podcastExists($podcast)) {
            $this->savePodcast($podcast);
        }
    }

    protected function savePodcast(Fluent $podcast): void
    {
        $this->info("Found new podcast: {$podcast->attributes->name}");

        $data = [
            'transistor_id' => $podcast->id,
            'title' => $podcast->attributes->name,
            'url' => $podcast->attributes->url,
            'embed_url' => $this->replaceWithEmbedUrl($podcast->attributes->share_url),
            'published_at' => $podcast->attributes->published_at,
            'duration' => $podcast->attributes->duration,
            'summary' => $podcast->attributes->formatted_summary,
            'description' => $this->removeLineBreaks($podcast->attributes->description),
        ];

        $yaml = Yaml::dump($data, 4, 2, Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK);
        $content = '---\n'.$yaml."---\n\n";

        Storage::disk('content')->put($this->path($podcast), $content);
    }

    protected function podcastExists(Fluent $podcast): bool
    {
        return Speaking::where('transistor_id', $podcast->id)->exists();
    }

    private function path(Fluent $podcast): string
    {
        return "speaking/{$podcast->attributes->slug}.md";
    }

    private function replaceWithEmbedUrl(string $url): string
    {
        return str_replace('/s/', '/e/', $url);
    }

    private function removeLineBreaks(string $text): string
    {
        return preg_replace('/\r\n|\r|\n/', ' ', $text);
    }
}
