<?php

namespace App\Console\Commands\Speaking;

use App\Models\Speaking;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Fluent;
use Illuminate\Support\Str;
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

    /**
     * @return Collection<int, array<string, mixed>>
     */
    protected function fetchPodcasts(): Collection
    {
        return Http::withHeader('x-api-key', config('services.transistor.api_key'))
            ->throw()
            ->get('https://api.transistor.fm/v1/episodes?pagination[per]=250&status=published')
            ->collect('data');
    }

    /**
     * @param Fluent<string, mixed> $podcast
     */
    protected function saveIfNotExists(Fluent $podcast): void
    {
        if (! $this->podcastExists($podcast)) {
            $this->savePodcast($podcast);
        }
    }

    /**
     * @param Fluent<string, mixed> $podcast
     */
    protected function savePodcast(Fluent $podcast): void
    {
        $this->info("Found new podcast: {$podcast->get('attributes.title')}");

        $data = [
            'transistor_id' => $podcast->get('id'),
            'title' => $podcast->get('attributes.title'),
            'show_name' => 'The Midwest Artisan Podcast',
            'embed_url' => $this->embedUrl($podcast->get('attributes.share_url')),
            'video_url' => $podcast->get('attributes.video_url') ? $podcast->get('attributes.video_url') : null,
            'published_at' => $podcast->get('attributes.published_at'),
            'duration' => $podcast->get('attributes.duration'),
            'summary' => $this->summarizeDescription($podcast->get('attributes.description')),
            'description' => strip_tags($podcast->get('attributes.formatted_summary')),
        ];

        Storage::disk('content')->put($this->path($podcast), $this->toYaml($data));

        if ($podcast->get('attributes.transcript_url')) {
            $this->downloadTranscript($podcast);
        }
    }

    /**
     * @param Fluent<string, mixed> $podcast
     */
    protected function podcastExists(Fluent $podcast): bool
    {
        return Speaking::where('transistor_id', $podcast->get('id'))->exists();
    }

    /**
     * @param Fluent<string, mixed> $podcast
     */
    protected function downloadTranscript(Fluent $podcast): void
    {
        $transcript = Http::get($podcast->get('attributes.transcript_url').'.txt');

        if ($transcript->failed()) {
            $this->error("Failed to download transcript for podcast: {$podcast->get('attributes.title')}");

            return;
        }

        Storage::disk('content')->put($this->transcriptPath($podcast), $transcript->body());
    }

    /**
     * @param Fluent<string, mixed> $podcast
     */
    protected function path(Fluent $podcast): string
    {
        return "speaking/{$podcast->get('attributes.slug')}.md";
    }

    /**
     * @param Fluent<string, mixed> $podcast
     */
    protected function transcriptPath(Fluent $podcast): string
    {
        return "speaking/transcripts/{$podcast->get('attributes.slug')}.txt";
    }

    protected function embedUrl(string $url): string
    {
        return str_replace('/s/', '/e/', $url);
    }

    /**
     * @param array<string, mixed> $content
     */
    protected function toYaml(array $content): string
    {
        $yaml = Yaml::dump($content, 4, 2, Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK);

        return "---\n".$yaml."---\n";
    }

    protected function summarizeDescription(string $description): string
    {
        return Str::of($description)
            ->stripTags()
            ->replaceMatches('/\s+/', ' ') // Normalize whitespace
            ->replaceMatches('/\{\{.*?\}\}/', '') // Removes Transistor.fm template tags. eg. {{people}}
            ->trim()
            ->explode('. ')
            ->first();
    }
}
