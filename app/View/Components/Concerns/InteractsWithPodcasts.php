<?php

namespace App\View\Components\Concerns;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

trait InteractsWithPodcasts
{
    /**
     * @return Collection<int, array{
     *     slug: string,
     *     title: string,
     *     description: string,
     *     date: \DateTimeInterface
     * }>
     */
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
                        'youtube_thumbnail' => $this->resolveYoutubeThumbnail($content),
                        'duration' => $this->resolveDuration($content),
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
        $pattern = '/<meta\s+name="description"\s+content="(.*?)"/s';

        if (preg_match($pattern, $content, $matches)) {
            $description = $matches[1];

            $description = preg_replace('/\s+/', ' ', $description);

            return trim($description);
        }

        return '';
    }

    protected function resolveYoutubeThumbnail(string $content): string
    {
        $pattern = '/"embedUrl": "(.*?)"/s';

        if (preg_match($pattern, $content, $matches)) {
            $youtubeId = Str::after($matches[1], 'v=');

            return "https://img.youtube.com/vi/{$youtubeId}/maxresdefault.jpg";
        }

        return '';
    }

    protected function resolveDuration(string $content): string
    {
        $pattern = '/"timeRequired": "(.*?)"/s';

        if (preg_match($pattern, $content, $matches)) {
            $duration = $matches[1];

            // Extract hours, minutes, and seconds
            preg_match('/PT(?:(\d+)H)?(?:(\d+)M)?(?:(\d+)S)?/', $duration, $time);

            $hours = isset($time[1]) ? (int) $time[1] : 0;
            $minutes = isset($time[2]) ? (int) $time[2] : 0;
            $seconds = isset($time[3]) ? (int) $time[3] : 0;

            // Format the time components
            $formattedHours = Str::padLeft((string) $hours, 2, '0');
            $formattedMinutes = Str::padLeft((string) $minutes, 2, '0');
            $formattedSeconds = Str::padLeft((string) $seconds, 2, '0');

            return "{$formattedHours}:{$formattedMinutes}:{$formattedSeconds}";
        }

        return '00:00:00';
    }
}
