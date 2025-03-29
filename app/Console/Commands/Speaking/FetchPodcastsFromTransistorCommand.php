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

        $this->info('Completed fetching podcasts from Transistor.fm.');
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
        $this->info("Found new podcast: {$podcast->get('attributes.title')}");

        $data = [
            'transistor_id' => $podcast->id,
            'title' => $podcast->get('attributes.title'),
            'show_name' => 'The Midwest Artisan Podcast',
            'embed_url' => $this->embedUrl($podcast->get('attributes.share_url')),
            'published_at' => $podcast->get('attributes.published_at'),
            'duration' => $podcast->get('attributes.duration'),
            'summary' => $podcast->get('attributes.formatted_summary'),
            'description' => $this->cleanText($podcast->get('attributes.description')),
        ];

        Storage::disk('content')->put($this->path($podcast), $this->toYaml($data));
    }

    protected function podcastExists(Fluent $podcast): bool
    {
        return Speaking::where('transistor_id', $podcast->get('id'))->exists();
    }

    protected function path(Fluent $podcast): string
    {
        return "speaking/{$podcast->get('attributes.slug')}.md";
    }

    protected function embedUrl(string $url): string
    {
        return str_replace('/s/', '/e/', $url);
    }

    protected function cleanText(string $text): string
    {
        return preg_replace('/\r\n|\r|\n/', ' ', $text);
    }

    protected function toYaml(array $content): string
    {
        $yaml = Yaml::dump($content, 4, 2, Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK);

        return "---\n" . $yaml . "---\n\n";
    }
}
