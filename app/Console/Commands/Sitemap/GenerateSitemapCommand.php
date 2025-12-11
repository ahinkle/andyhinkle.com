<?php

namespace App\Console\Commands\Sitemap;

use App\Models\Post;
use App\Models\Speaking;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'sitemap:generate', description: 'Generate the sitemap for the application')]
class GenerateSitemapCommand extends Command
{
    public function handle(): int
    {
        Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/blog'))
            ->add(Url::create('/speaking'))
            ->add(Url::create('/gear'))
            ->add(Post::query()->get())
            ->add(Speaking::query()->get())
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');

        return Command::SUCCESS;
    }
}
