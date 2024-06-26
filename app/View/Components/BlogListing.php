<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
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

    protected function resolvePosts(): Collection
    {
        return Cache::rememberForever('post-listing', function () {
            return collect(glob(resource_path('views/pages/blog/*.blade.php')))
                ->map(function ($file) {
                    $slug = str_replace('.blade.php', '', pathinfo($file, PATHINFO_BASENAME));
                    $content = file_get_contents($file);

                    preg_match('/<title>(.*?)<\/title>/', $content, $matches);
                    $title = $matches[1] ?? '';

                    preg_match('/<p\b[^>]*>(.*?)<\/p>/', $content, $matches);
                    $date = $matches[1] ?? '';

                    preg_match('/<p\b[^>]*>([^<]*?[^<]{20,}.*?)<\/p>/', $content, $matches);
                    $description = $matches[1] ?? '';
                    $description = preg_replace('/\s+/', ' ', $description);

                    return [
                        'path' => $file,
                        'slug' => '/blog/'.$slug,
                        'title' => $title,
                        'description' => $description,
                        'date' => $date,
                    ];
                })
                ->sortByDesc('date');
        });
    }
}
