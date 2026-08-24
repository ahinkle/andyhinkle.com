<?php

namespace App\View\Components\Seo;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Laravel\Head\Enums\ImageType;
use Laravel\Head\Enums\OgType;
use Laravel\Head\Enums\TwitterCard;
use Laravel\Head\Facades\Head;
use Laravel\Head\Facades\Schema;

class BlogPost extends Component
{
    public function __construct(public Post $post) {}

    public function render(): View|Closure|string
    {
        $ogImage = asset("images/share/og/blog/{$this->post->slug}.png");

        Head::title($this->post->title)
            ->description($this->post->description)
            ->og(type: OgType::Article, url: url()->current())
            ->ogImage($ogImage, alt: $this->post->title, width: 1177, height: 645, type: ImageType::Png)
            ->twitter(card: TwitterCard::SummaryWithLargeImage);

        $schema = Schema::blogPosting()
            ->headline($this->post->title)
            ->image($ogImage)
            ->author(Schema::person()->name('Andy Hinkle')->url(url('/')))
            ->set('url', url()->current())
            ->set('mainEntityOfPage', url()->current());

        if (filled($this->post->description)) {
            $schema->description($this->post->description);
        }

        if ($this->post->published_at) {
            Head::meta('article:published_time', $this->post->published_at->toIso8601String());
            $schema->publishedAt($this->post->published_at);
        }

        Head::schema($schema);

        return '';
    }
}
