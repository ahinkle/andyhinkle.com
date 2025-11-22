<?php

namespace App\Console\Commands\Speaking;

use App\Models\Speaking;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Fluent;
use Illuminate\Support\Str;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Yaml\Yaml;

#[AsCommand(name: 'transistor:fetch-podcasts', description: 'Fetch new podcasts from Transistor.fm and save them in storage.')]
class FetchPodcastsFromTransistorCommand extends Command
{
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
     * @param  Fluent<string, mixed>  $podcast
     */
    protected function saveIfNotExists(Fluent $podcast): void
    {
        if (! $this->podcastExists($podcast)) {
            $this->savePodcast($podcast);
        }
    }

    /**
     * @param  Fluent<string, mixed>  $podcast
     */
    protected function savePodcast(Fluent $podcast): void
    {
        $title = $this->getString($podcast, 'attributes.title');
        $this->info("Found new podcast: {$title}");

        $data = [
            'type' => 'podcast',
            'transistor_id' => $podcast->get('id'),
            'title' => $title,
            'show_name' => 'The Midwest Artisan Podcast',
            'embed_url' => $this->embedUrl($this->getString($podcast, 'attributes.share_url')),
            'video_url' => $podcast->get('attributes.video_url') ?: null,
            'published_at' => $podcast->get('attributes.published_at'),
            'duration' => $podcast->get('attributes.duration'),
            'summary' => $this->summarizeDescription($this->getString($podcast, 'attributes.description')),
            'description' => strip_tags($this->getString($podcast, 'attributes.formatted_summary')),
        ];

        Storage::disk('content')->put($this->path($podcast), $this->toYaml($data));

        if ($podcast->get('attributes.transcript_url')) {
            $this->downloadTranscript($podcast);
        }
    }

    /**
     * @param  Fluent<string, mixed>  $podcast
     */
    protected function podcastExists(Fluent $podcast): bool
    {
        return Speaking::where('transistor_id', $podcast->get('id'))->exists();
    }

    /**
     * @param  Fluent<string, mixed>  $podcast
     */
    protected function downloadTranscript(Fluent $podcast): void
    {
        $transcriptUrl = $this->getString($podcast, 'attributes.transcript_url');
        $transcript = Http::get($transcriptUrl.'.txt');

        if ($transcript->failed()) {
            $title = $this->getString($podcast, 'attributes.title');
            $this->error("Failed to download transcript for podcast: {$title}");

            return;
        }

        Storage::disk('content')->put($this->transcriptPath($podcast), $transcript->body());
    }

    /**
     * @param  Fluent<string, mixed>  $podcast
     */
    protected function path(Fluent $podcast): string
    {
        $slug = $this->getString($podcast, 'attributes.slug');

        return "speaking/{$slug}.md";
    }

    /**
     * @param  Fluent<string, mixed>  $podcast
     */
    protected function transcriptPath(Fluent $podcast): string
    {
        $slug = $this->getString($podcast, 'attributes.slug');

        return "speaking/transcripts/{$slug}.txt";
    }

    /**
     * @param  Fluent<string, mixed>  $fluent
     */
    protected function getString(Fluent $fluent, string $key): string
    {
        $value = $fluent->get($key);

        return is_string($value) ? $value : '';
    }

    protected function embedUrl(string $url): string
    {
        return str_replace('/s/', '/e/', $url);
    }

    /**
     * @param  array<string, mixed>  $content
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
            ->first() ?? '';
    }
}
