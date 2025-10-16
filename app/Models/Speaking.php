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
use Symfony\Component\Finder\SplFileInfo;

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
        /** @var Collection<int, array<string, mixed>> $collection */
        $collection = collect(iterator_to_array($this->files()))
            ->map(fn (SplFileInfo $file): array => $this->parseFile($file))
            ->values();

        $collectionWithTranscripts = $this->transcriptPath($collection);

        /** @var array<int, array<string, mixed>> */
        return $collectionWithTranscripts
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
    protected function parseFile(SplFileInfo $file): array
    {
        $document = YamlFrontMatter::parseFile($file->getPathname());

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

        $matter = $document->matter();

        /** @var array<string, mixed> */
        return array_merge(
            $defaults,
            is_array($matter) ? $matter : [],
            ['slug' => $file->getBasename('.md')], // Always override slug
        );
    }

    /**
     * @param  Collection<int, array<string, mixed>>  $items
     * @return Collection<int, array<string, mixed>>
     */
    protected function transcriptPath(Collection $items): Collection
    {
        /** @var Collection<int, array<string, mixed>> */
        return $items->map(function (array $item): array {
            $slug = $item['slug'] ?? '';
            $slugString = is_string($slug) ? $slug : '';
            $path = resource_path("content/speaking/transcripts/{$slugString}.txt");
            $transcript = File::exists($path) ? $path : null;

            /** @var array<string, mixed> */
            return array_merge($item, compact('transcript'));
        })->values();
    }

    /** @return Attribute<string|null, never> */
    protected function videoThumbnail(): Attribute
    {
        /** @var Attribute<string|null, never> */
        return new Attribute(
            get: function (): ?string {
                $id = $this->youtubeId();

                return $id ? "https://img.youtube.com/vi/{$id}/mqdefault.jpg" : null;
            }
        );
    }

    /** @return Attribute<string|null, never> */
    protected function videoEmbedUrl(): Attribute
    {
        /** @var Attribute<string|null, never> */
        return new Attribute(
            get: function (): ?string {
                $id = $this->youtubeId();

                return $id ? "https://www.youtube.com/embed/{$id}" : null;
            }
        );
    }

    /** @return Attribute<string|null, never> */
    protected function durationMmss(): Attribute
    {
        return Attribute::make(
            get: function (): string {
                $duration = $this->getAttribute('duration');
                $durationInt = is_int($duration) ? $duration : 0;

                return $this->formatDuration($durationInt);
            }
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
            get: function (): ?string {
                $showName = $this->getAttribute('show_name');
                $eventName = $this->getAttribute('event_name');

                return is_string($showName) ? $showName : (is_string($eventName) ? $eventName : null);
            }
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

        if (! $url || ! is_string($url)) {
            return null;
        }

        if (preg_match('/(?:youtu\.be\/|v=)([a-zA-Z0-9_-]{11})/', $url, $matches)) {
            return $matches[1];
        }

        return null;
    }
}
