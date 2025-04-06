<?php

namespace App\View\Components\Concerns;

use DateTimeInterface;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

trait InteractsWithBlogPosts
{
    /**
     * @return Collection<int, array{slug: string, title: string, description: string, date: DateTimeInterface}>
     */
    public function resolvePosts(): Collection
    {
        return Cache::rememberForever('post-listing', fn () => collect(glob(resource_path('views/pages/blog/*.blade.php')))
            ->map(function ($file) {
                $content = file_get_contents($file);

                return [
                    'slug' => $this->resolveSlug($file),
                    'title' => $this->resolveTitle($content),
                    'description' => $this->resolveDescription($content),
                    'date' => $this->resolvePublishedDate($content),
                ];
            })
            ->sortByDesc('date'));
    }

    protected function resolveSlug(string $file): string
    {
        $slug = str_replace('.blade.php', '', pathinfo($file, PATHINFO_BASENAME));

        return '/blog/'.$slug;
    }

    protected function resolveTitle(string $content): string
    {
        preg_match('/<title>(.*?)<\/title>/', $content, $matches);

        return $matches[1] ?? '';
    }

    protected function resolvePublishedDate(string $content): Carbon
    {
        preg_match('/<p\b[^>]*>(.*?)<\/p>/', $content, $matches);

        return $matches[1] ? Carbon::parse($matches[1]) : now();
    }

    protected function resolveDescription(string $content): string
    {
        preg_match('/<p\b[^>]*>([^<]*?[^<]{20,}.*?)<\/p>/', $content, $matches);

        return $matches[1] ?? '';
    }
}
