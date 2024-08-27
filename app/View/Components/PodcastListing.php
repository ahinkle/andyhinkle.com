<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class PodcastListing extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.podcast-listing', [
            'podcasts' => $this->resolvePodcasts(),
        ]);
    }

    protected function resolvePodcasts(): Collection
    {
        return Cache::rememberForever('podcast-listing', function () {
            return collect(glob(resource_path('views/pages/speaking/*.blade.php')))
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

        return '/speaking/'.$slug;
    }

    protected function resolveTitle(string $content): string
    {
        preg_match('/<title>(.*?)<\/title>/', $content, $matches);

        $title = $matches[1] ?? '';

        return Str::before($title, ' | ');
    }

    protected function resolvePublishedDate(string $content): Carbon
    {
        preg_match('/<p\b[^>]*>(.*?)<\/p>/', $content, $matches);

        return $matches[1] ? Carbon::parse($matches[1]) : now();
    }

    protected function resolveDescription(string $content): string
    {
        preg_match('/<meta name="description" content="(.*?)"/', $content, $matches);

        return $matches[1] ?? '';
    }
}
