<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class BlogListing extends Component
{
    public function render(): View|Closure|string
    {
        return view('components.blog-listing', [
            'posts' => $this->resolvePosts(),
        ]);
    }

    /**
     * @return Collection<int, array{
     *     slug: string,
     *     title: string,
     *     description: string,
     *     date: \DateTimeInterface
     * }>
     */
    protected function resolvePosts(): Collection
    {
        return Cache::rememberForever('post-listing', function () {
            return collect(glob(resource_path('views/pages/blog/*.blade.php')))
                ->map(function ($file) {
                    $content = file_get_contents($file);

                    return [
                        'slug' => $this->resolveSlug($file),
                        'title' => $this->resolveTitle($content),
                        'description' => $this->resolveDescription($content),
                        'date' => $this->resolvePublishedDate($content),
                    ];
                })
                ->sortByDesc('date');
        });
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
