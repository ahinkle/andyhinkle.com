<?php

namespace App\Models;

use App\Models\Scopes\LatestPublishedOrderScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Sushi\Sushi;
use Symfony\Component\Finder\Finder;

#[ScopedBy(LatestPublishedOrderScope::class)]
class Post extends Model
{
    use Sushi;

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    /** @return array<int, array<string, mixed>> */
    public function getRows(): array
    {
        return collect($this->files())
            ->map(fn (string $file): array => $this->parseFile($file))
            ->sortByDesc('published_at')
            ->values()
            ->toArray();
    }

    protected function files(): Finder
    {
        return Finder::create()
            ->files()
            ->in(resource_path('content/blog'))
            ->name('*.md');
    }

    /**  @return array<string, mixed> */
    protected function parseFile(string $file): array
    {
        $document = YamlFrontMatter::parseFile($file);

        // Default values for all possible fields
        $defaults = [
            'title' => '',
            'description' => '',
            'published_at' => null,
            'slug' => basename($file, '.md'),
            'content' => '',
        ];

        return array_merge(
            $defaults,
            $document->matter(),
            [
                'slug' => basename($file, '.md'), // Always override slug
                'content' => $document->body(), // Store markdown content
            ],
        );
    }

    /** @return Attribute<string, never> */
    protected function formattedDate(): Attribute
    {
        return Attribute::make(
            get: fn (): string => $this->getAttribute('published_at')?->format('F j, Y') ?? '',
        );
    }
}
