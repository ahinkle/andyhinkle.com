<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Head\Enums\ImageType;
use Laravel\Head\Enums\OgType;
use Laravel\Head\Enums\TwitterCard;
use Laravel\Head\ErrorPages;
use Laravel\Head\Facades\Head;
use Laravel\Head\Facades\Schema;
use Laravel\Head\HeadBuilder;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configureHeadDefaults();
        $this->configureHeadErrorPages();
    }

    protected function configureHeadDefaults(): void
    {
        Head::defaults(function (HeadBuilder $head): void {
            $head
                ->title('Andy Hinkle | Software Developer', suffix: ' | Andy Hinkle')
                ->description('Andy Hinkle is a software developer from Santa Claus, Indiana with over 10 years of experience specializing in Laravel, PHP, and JavaScript.')
                ->canonical()
                ->viewport('width=device-width, initial-scale=1.0, viewport-fit=cover')
                ->themeColor('#142648')
                ->favicon('/favicon.ico', type: ImageType::Ico)
                ->og(siteName: 'Andy Hinkle, Laravel Developer', type: OgType::Website, locale: 'en_US')
                ->twitter(card: TwitterCard::Summary, site: '@andyhnk', creator: '@andyhnk')
                ->searchableByRobots()
                ->meta('geo.region', 'US-IN')
                ->preconnect('https://d.andyhinkle.com')
                ->schema(Schema::webSite()
                    ->name('Andy Hinkle')
                    ->url(url('/')))
                ->schema(Schema::person()
                    ->name('Andy Hinkle')
                    ->url(url('/'))
                    ->set('jobTitle', 'Software Developer')
                    ->set('sameAs', [
                        'https://github.com/ahinkle',
                        'https://bsky.app/profile/andyhinkle.com',
                        'https://x.com/andyhnk',
                        'https://www.linkedin.com/in/athinkle',
                        'https://themidwestartisanpodcast.com/',
                    ]));
        });
    }

    protected function configureHeadErrorPages(): void
    {
        Head::errors(function (ErrorPages $errors): void {
            $errors->defaults(robots: 'noindex, follow');

            $errors->status(
                404,
                title: 'Page Not Found',
                description: 'The page you are looking for could not be found.',
            );

            $errors->status(
                500,
                title: 'Server Error',
                description: 'Something went wrong. Please try again later.',
            );
        });
    }
}
