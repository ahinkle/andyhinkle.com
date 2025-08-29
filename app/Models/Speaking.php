<?php

namespace App\Models;

use App\Models\Scopes\LatestPublishedOrderScope;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Sushi\Sushi;
use Symfony\Component\Finder\Finder;

#[ScopedBy(LatestPublishedOrderScope::class)]
class Speaking extends Model
{
    use Sushi;

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'duration' => 'integer',
        ];
    }

    /** @param Builder<static> $query */
    #[Scope]
    protected function podcasts(Builder $query): void
    {
        $query->where('type', 'podcast');
    }

    /** @param Builder<static> $query */
    #[Scope]
    protected function speaking(Builder $query): void
    {
        $query->where('type', 'speaking');
    }

    /** @param Builder<static> $query */
    #[Scope]
    protected function byType(Builder $query, ?string $type = null): void
    {
        if ($type && $type !== 'all') {
            $query->where('type', $type);
        }
    }

    /** @return array<int, array<string, mixed>> */
    public function getRows(): array
    {
        return collect($this->files())
            ->map(fn (string $file): array => $this->parseFile($file))
            ->pipe(fn (Collection $collection): Collection => $this->transcriptPath($collection))
            ->sortBy('published_at')
            ->values()
            ->toArray();
    }

    protected function files(): Finder
    {
        return Finder::create()
            ->files()
            ->in(resource_path('content/speaking'))
            ->name('*.md');
    }

    /**  @return array<string, mixed> */
    protected function parseFile(string $file): array
    {
        $document = YamlFrontMatter::parseFile($file);

        // Default values for all possible fields
        $defaults = [
            'type' => 'podcast', // Default to podcast for backward compatibility
            'transistor_id' => null,
            'title' => '',
            'show_name' => null,
            'embed_url' => null,
            'video_url' => null,
            'published_at' => null,
            'duration' => null,
            'summary' => '',
            'description' => '',
            'slug' => basename($file, '.md'),
        ];

        return array_merge(
            $defaults,
            $document->matter(),
            ['slug' => basename($file, '.md')], // Always override slug
        );
    }

    /**
     * @param  Collection<int, array<string, mixed>>  $items
     * @return Collection<int, non-empty-array<string, mixed>>
     */
    protected function transcriptPath(Collection $items): Collection
    {
        return $items->map(function (array $item): array {
            $path = resource_path("content/speaking/transcripts/{$item['slug']}.txt");
            $transcript = File::exists($path) ? $path : null;

            return array_merge($item, compact('transcript'));
        });
    }

    /** @return Attribute<string|null, never> */
    protected function videoThumbnail(): Attribute
    {
        return new Attribute(
            get: fn (): ?string => $this->youtubeId() ? "https://img.youtube.com/vi/{$this->youtubeId()}/maxresdefault.jpg" : null
        );
    }

    /** @return Attribute<string|null, never> */
    protected function videoEmbedUrl(): Attribute
    {
        return new Attribute(
            get: fn (): ?string => $this->youtubeId() ? "https://www.youtube.com/embed/{$this->youtubeId()}" : null
        );
    }

    /** @return Attribute<string|null, never> */
    protected function durationMmss(): Attribute
    {
        return Attribute::make(
            get: fn (): string => $this->formatDuration($this->getAttribute('duration') ?? 0),
        );
    }

    /** @return Attribute<string|null, never> */
    protected function typeLabel(): Attribute
    {
        return Attribute::make(
            get: fn (): string => match ($this->getAttribute('type')) {
                'podcast' => 'Podcast',
                'speaking' => 'Speaking',
                default => 'Speaking',
            }
        );
    }

    /** @return Attribute<string|null, never> */
    protected function contextName(): Attribute
    {
        return Attribute::make(
            get: fn (): ?string => $this->getAttribute('show_name') ?? $this->getAttribute('event_name')
        );
    }

    protected function formatDuration(int $seconds): string
    {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $secs = $seconds % 60;

        return sprintf('%02d:%02d:%02d', $hours, $minutes, $secs);
    }

    private function youtubeId(): ?string
    {
        $url = $this->getAttribute('video_url');

        if (! $url) {
            return null;
        }

        if (preg_match('/(?:youtu\.be\/|v=)([a-zA-Z0-9_-]{11})/', (string) $url, $matches)) {
            return $matches[1];
        }

        return null;
    }
}
