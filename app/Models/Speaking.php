<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Sushi\Sushi;
use Symfony\Component\Finder\Finder;

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
        return $this->files()
            ->map(fn ($file) => $this->parse($file))
            ->pipe(fn ($collection) => $this->transcript($collection))
            ->sortBy('published_at')
            ->values()
            ->toArray();
    }

    protected function files(): Collection
    {
        return Collection::make(
            Finder::create()
                ->files()
                ->in(resource_path('content/speaking'))
                ->name('*.md'),
        );
    }

    protected function parse(string $file): array
    {
        $document = YamlFrontMatter::parseFile($file);

        return array_merge($document->matter(), [
            'slug' => basename($file, '.md'),
        ]);
    }

    protected function transcript(Collection $items): Collection
    {
        return $items->map(function ($item) {
            $path = resource_path("content/speaking/transcripts/{$item['slug']}.txt");
            $transcript = File::exists($path) ? $path : null;

            return array_merge($item, [
                'transcript' => $transcript,
            ]);
        });
    }
}
