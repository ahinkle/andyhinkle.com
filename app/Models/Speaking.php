<?php

namespace App\Models;

use App\Models\Scopes\LatestPublishedOrderScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
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
        ];
    }

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

    protected function parseFile(string $file): array
    {
        $document = YamlFrontMatter::parseFile($file);

        return array_merge(
            $document->matter(),
            ['slug' => basename($file, '.md')],
        );
    }

    protected function transcriptPath(Collection $items): Collection
    {
        return $items->map(function ($item) {
            $path = resource_path("content/speaking/transcripts/{$item['slug']}.txt");
            $transcript = File::exists($path) ? $path : null;

            return array_merge($item, compact('transcript'));
        });
    }

    protected function videoThumbnail(): Attribute
    {
        return Attribute::get(function () {
            $id = $this->youtubeId();

            return $id ? "https://img.youtube.com/vi/{$id}/maxresdefault.jpg" : null;
        });
    }

    protected function videoEmbedUrl(): Attribute
    {
        return Attribute::get(function () {
            $id = $this->youtubeId();

            return $id ? "https://www.youtube.com/embed/{$id}" : null;
        });
    }

    protected function durationMmss(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->formatDuration($this->duration),
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
        if (! $this->video_url) {
            return null;
        }

        if (preg_match('/(?:youtu\.be\/|v=)([a-zA-Z0-9_-]{11})/', $this->video_url, $matches)) {
            return $matches[1];
        }

        return null;
    }
}
