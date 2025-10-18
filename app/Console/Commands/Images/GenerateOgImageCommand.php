<?php

namespace App\Console\Commands\Images;

use Illuminate\Console\Command;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Intervention\Image\Drivers\Imagick\Driver as ImagickDriver;
use Intervention\Image\ImageManager;
use Intervention\Image\Typography\FontFactory;

use function Laravel\Prompts\text;

class GenerateOgImageCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'og:image';

    /**
     * @var string
     */
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
        // Ensure output directory exists
        $outputDir = public_path('images/share/og');
        if (! is_dir($outputDir)) {
            mkdir($outputDir, 0755, true);
        }

        // Create image manager with best available driver
        $manager = new ImageManager($this->getDriver());

        // Load template
        $templatePath = resource_path('img/og-template.png');
        $image = $manager->read($templatePath);

        // Get image dimensions for positioning calculations
        $width = $image->width();
        $height = $image->height();

        // Calculate text positioning (postcard style - left side)
        $x = 120; // Fixed left margin
        $y = 150; // Higher up on the image

        // Calculate max width (don't go past halfway to avoid photo)
        $maxWidth = (int) ($width * 0.58); // Leave right side for the photo

        // Get system font path
        $fontPath = $this->getFontPath();

        // Process text - handle manual line breaks and word wrap
        $lines = $this->wrapText($title, $maxWidth);

        // Add text to image
        $image->text(
            implode("\n", $lines),
            $x,
            $y,
            function (FontFactory $font) use ($fontPath): void {
                $font->file($fontPath);
                $font->size(72);
                $font->color('#ffffff');
                $font->align('left');
                $font->valign('top');
            }
        );

        // Save the image
        $outputPath = "{$outputDir}/{$name}.png";
        $image->save($outputPath);
    }

    protected function getDriver(): GdDriver|ImagickDriver
    {
        // Prefer Imagick for better quality if available
        if (extension_loaded('imagick')) {
            $this->info('Using Imagick driver for image processing');

            return new ImagickDriver;
        }

        $this->info('Using GD driver for image processing');

        return new GdDriver;
    }

    protected function getFontPath(): string
    {
        // Try macOS system fonts
        $fonts = [
            '/System/Library/Fonts/SFNSDisplay.ttf', // SF Pro Display
            '/System/Library/Fonts/SFNS.ttf', // SF Pro
            '/System/Library/Fonts/Helvetica.ttc', // Helvetica
            '/System/Library/Fonts/Supplemental/Arial.ttf', // Arial
        ];

        foreach ($fonts as $font) {
            if (file_exists($font)) {
                return $font;
            }
        }

        throw new \RuntimeException('No suitable font found on system');
    }

    /**
     * @return array<int, string>
     */
    protected function wrapText(string $text, int $maxWidth): array
    {
        // First, handle manual line breaks
        $manualLines = explode('\n', $text);
        $wrappedLines = [];

        // Process each manual line for auto-wrapping
        foreach ($manualLines as $line) {
            $words = explode(' ', $line);
            $currentLine = '';

            foreach ($words as $word) {
                $testLine = $currentLine === '' ? $word : $currentLine.' '.$word;

                // Estimate width (rough calculation)
                // Each character is approximately 32-35 pixels at size 72
                $estimatedWidth = strlen($testLine) * 33;

                if ($estimatedWidth > $maxWidth && $currentLine !== '') {
                    $wrappedLines[] = $currentLine;
                    $currentLine = $word;
                } else {
                    $currentLine = $testLine;
                }
            }

            if ($currentLine !== '') {
                $wrappedLines[] = $currentLine;
            }
        }

        return $wrappedLines;
    }
}
