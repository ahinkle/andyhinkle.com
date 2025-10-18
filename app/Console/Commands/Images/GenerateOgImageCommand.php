<?php

namespace App\Console\Commands\Images;

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
    protected $signature = 'og:image';

    protected $description = 'Generate an OG image with custom text overlay';

    public function handle(): int
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
            hint: 'Use \n for manual line breaks'
        );

        $this->info('Generating OG image...');

        try {
            $this->generateImage($name, $title);
            $this->info("OG image created successfully at: public/images/share/og/{$name}.png");

            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->error('Failed to generate image: '.$e->getMessage());

            return Command::FAILURE;
        }
    }

    protected function generateImage(string $name, string $title): void
    {
        $outputDir = public_path('images/share/og');

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
            ->explode('\n')
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
