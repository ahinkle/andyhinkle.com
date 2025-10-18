<?php

namespace App\Console\Commands\Images;

use Exception;
use App\Models\Post;
use App\Models\Speaking;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Intervention\Image\Drivers\Imagick\Driver as ImagickDriver;
use Intervention\Image\ImageManager;
use Intervention\Image\Typography\FontFactory;

use function Laravel\Prompts\text;

class GenerateOgImageCommand extends Command
{
    protected $signature = 'og:image
                            {--custom : Generate a custom OG image with manual input}
                            {--type= : Generate for specific type only (blog, speaking, or all)}
                            {--force : Regenerate images even if they already exist}';

    protected $description = 'Generate OG images automatically for blog posts and speaking pages';

    public function handle(): int
    {
        if ($this->option('custom')) {
            return $this->handleCustom();
        }

        return $this->handleAutomatic();
    }

    protected function handleCustom(): int
    {
        $name = text(
            label: 'What should the filename be?',
            placeholder: 'my-blog-post',
            required: true,
            hint: 'File will be saved as public/images/share/og/{name}.png'
        );

        $title = text(
            label: 'What text should be overlaid on the image?',
            placeholder: 'My Awesome Blog Post',
            required: true,
            hint: 'Use \\n for manual line breaks'
        );

        $this->info('Generating custom OG image...');

        try {
            $this->generateImage($name, $title);
            $this->info("OG image created successfully at: public/images/share/og/{$name}.png");

            return Command::SUCCESS;
        } catch (Exception $exception) {
            $this->error('Failed to generate image: '.$exception->getMessage());

            return Command::FAILURE;
        }
    }

    protected function handleAutomatic(): int
    {
        $type = $this->option('type') ?? 'all';
        $force = (bool) $this->option('force');

        $generated = 0;
        $skipped = 0;

        if (in_array($type, ['blog', 'all'])) {
            $this->info('Processing blog posts...');
            [$blogGenerated, $blogSkipped] = $this->generateBlogImages($force);
            $generated += $blogGenerated;
            $skipped += $blogSkipped;
        }

        if (in_array($type, ['speaking', 'all'])) {
            $this->info('Processing speaking pages...');
            [$speakingGenerated, $speakingSkipped] = $this->generateSpeakingImages($force);
            $generated += $speakingGenerated;
            $skipped += $speakingSkipped;
        }

        $this->newLine();
        $this->info("Generated: {$generated} image(s)");
        $this->info("Skipped: {$skipped} image(s) (already exist)");

        return Command::SUCCESS;
    }

    /**
     * @return array{int, int}
     */
    protected function generateBlogImages(bool $force = false): array
    {
        $posts = Post::all();
        $generated = 0;
        $skipped = 0;

        foreach ($posts as $post) {
            $path = public_path("images/share/og/blog/{$post->slug}.png");

            if (! $force && file_exists($path)) {
                $this->comment("  Skipping blog/{$post->slug}.png (already exists)");
                $skipped++;

                continue;
            }

            try {
                $this->generateImage($post->slug, $post->title, 'blog');
                $this->info("  Generated blog/{$post->slug}.png");
                $generated++;
            } catch (Exception $e) {
                $this->error("  Failed to generate blog/{$post->slug}.png: ".$e->getMessage());
            }
        }

        return [$generated, $skipped];
    }

    /**
     * @return array{int, int}
     */
    protected function generateSpeakingImages(bool $force = false): array
    {
        $speaking = Speaking::all();
        $generated = 0;
        $skipped = 0;

        foreach ($speaking as $item) {
            $path = public_path("images/share/og/speaking/{$item->slug}.png");

            if (! $force && file_exists($path)) {
                $this->comment("  Skipping speaking/{$item->slug}.png (already exists)");
                $skipped++;

                continue;
            }

            try {
                $this->generateImage($item->slug, $item->title, 'speaking');
                $this->info("  Generated speaking/{$item->slug}.png");
                $generated++;
            } catch (Exception $e) {
                $this->error("  Failed to generate speaking/{$item->slug}.png: ".$e->getMessage());
            }
        }

        return [$generated, $skipped];
    }

    protected function generateImage(string $name, string $title, ?string $type = null): void
    {
        $outputDir = $type
            ? public_path("images/share/og/{$type}")
            : public_path('images/share/og');

        if (! is_dir($outputDir)) {
            mkdir($outputDir, 0755, true);
        }

        $manager = new ImageManager($this->driver());
        $image = $manager->read(resource_path('img/og-template.png'));

        $width = $image->width();
        $lines = $this->wrapText($title, (int) ($width * 0.50));

        $image->text(
            $lines->implode("\n"),
            90,
            $lines->count() === 2 ? 175 : 125,
            fn (FontFactory $font) => $font
                ->file(resource_path('fonts/Poppins-Regular.ttf'))
                ->size(72)
                ->color('#ffffff')
                ->align('left')
                ->valign('top')
                ->lineHeight(1.5)
        );

        $image->save("{$outputDir}/{$name}.png");
    }

    protected function driver(): GdDriver|ImagickDriver
    {
        if (extension_loaded('imagick')) {
            $this->info('Using Imagick driver');

            return new ImagickDriver;
        }

        $this->info('Using GD driver');

        return new GdDriver;
    }

    /**
     * @return Collection<int, string>
     */
    protected function wrapText(string $text, int $maxWidth): Collection
    {
        return Str::of($text)
            ->explode('\\n')
            ->flatMap(fn ($line) => $this->wrapLine($line, $maxWidth));
    }

    /**
     * @return Collection<int, string>
     */
    protected function wrapLine(string $line, int $maxWidth): Collection
    {
        /** @var Collection<int, string> */
        return Str::of($line)
            ->explode(' ')
            ->reduce(function (Collection $wrapped, string $word) use ($maxWidth) {
                /** @var string $currentLine */
                $currentLine = $wrapped->last() ?? '';
                $testLine = $currentLine === '' ? $word : "{$currentLine} {$word}";

                if (strlen($testLine) * 33 > $maxWidth && $currentLine !== '') {
                    return $wrapped->push($word);
                }

                return $wrapped->put($wrapped->count() - 1, $testLine);
            }, collect(['']))
            ->filter()
            ->values();
    }
}
