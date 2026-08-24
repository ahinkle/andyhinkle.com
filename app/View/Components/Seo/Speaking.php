<?php

namespace App\View\Components\Seo;

use App\Models\Speaking as SpeakingModel;
use App\SpeakingType;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Laravel\Head\Enums\ImageType;
use Laravel\Head\Enums\OgType;
use Laravel\Head\Enums\TwitterCard;
use Laravel\Head\Facades\Head;
use Laravel\Head\Facades\Schema;
use Laravel\Head\Schema\SchemaObject;

class Speaking extends Component
{
    public function __construct(public SpeakingModel $speaking) {}

    public function render(): View|Closure|string
    {
        $ogImage = asset("images/share/og/speaking/{$this->speaking->slug}.png");

        Head::title($this->speaking->title)
            ->description($this->speaking->summary)
            ->og(type: OgType::Article, url: url()->current())
            ->ogImage($ogImage, alt: $this->speaking->title, width: 1177, height: 645, type: ImageType::Png)
            ->twitter(card: TwitterCard::SummaryWithLargeImage);

        if ($this->speaking->type === SpeakingType::Podcast) {
            Head::schema($this->podcastEpisodeSchema($ogImage));
        }

        return '';
    }

    protected function podcastEpisodeSchema(string $ogImage): SchemaObject
    {
        $episode = Schema::make('PodcastEpisode')
            ->set('name', $this->speaking->title)
            ->set('url', url()->current())
            ->set('image', $ogImage);

        if (filled($this->speaking->summary)) {
            $episode->set('description', $this->speaking->summary);
        }

        if ($this->speaking->published_at) {
            $episode->date('datePublished', $this->speaking->published_at);
        }

        if ($this->speaking->duration) {
            $episode->set('timeRequired', sprintf('PT%dM%dS', intdiv($this->speaking->duration, 60), $this->speaking->duration % 60));
        }

        if ($this->speaking->show_name) {
            $episode->set('partOfSeries', Schema::make('PodcastSeries')->set('name', $this->speaking->show_name));
        }

        return $episode;
    }
}
