<?php

namespace App\Models;

use App\Models\Scopes\LatestPublishedOrderScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Sushi\Sushi;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

/**
 * @property string $title
 * @property string $description
 * @property Carbon|null $published_at
 * @property string $slug
 * @property string $content
 * @property string $formatted_date
 */
#[ScopedBy(LatestPublishedOrderScope::class)]
class Post extends Model implements Sitemapable
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
        /** @var array<int, array<string, mixed>> */
        return collect(iterator_to_array($this->files()))
            ->map(fn (SplFileInfo $file): array => $this->parseFile($file))
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
    protected function parseFile(SplFileInfo $file): array
    {
        $document = YamlFrontMatter::parseFile($file->getPathname());

        // Default values for all possible fields
        $defaults = [
            'title' => '',
            'description' => '',
            'published_at' => null,
            'slug' => $file->getBasename('.md'),
            'content' => '',
        ];

        $matter = $document->matter();

        /** @var array<string, mixed> */
        return array_merge(
            $defaults,
            is_array($matter) ? $matter : [],
            [
                'slug' => $file->getBasename('.md'), // Always override slug
                'content' => $document->body(), // Store markdown content
            ],
        );
    }

    /** @return Attribute<string, never> */
    protected function formattedDate(): Attribute
    {
        return Attribute::make(
            get: function (): string {
                $publishedAt = $this->getAttribute('published_at');

                if (is_object($publishedAt) && method_exists($publishedAt, 'format')) {
                    /** @var Carbon $publishedAt */
                    return $publishedAt->format('F j, Y');
                }

                return '';
            }
        );
    }

    public function toSitemapTag(): Url
    {
        $url = Url::create("/blog/{$this->slug}");

        if ($this->published_at) {
            $url->setLastModificationDate($this->published_at);
        }

        return $url;
    }
}
