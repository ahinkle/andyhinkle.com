@php
    use Laravel\Head\Enums\ImageType;
    use Laravel\Head\Enums\OgType;
    use Laravel\Head\Enums\TwitterCard;
    use Laravel\Head\Facades\Head;
    use Laravel\Head\Facades\Schema;

    $ogImage = asset("images/share/og/speaking/{$speaking->slug}.png");

    Head::title($speaking->title)
        ->description($speaking->summary)
        ->og(type: OgType::Article, url: url()->current())
        ->ogImage($ogImage, alt: $speaking->title, width: 1177, height: 645, type: ImageType::Png)
        ->twitter(card: TwitterCard::SummaryWithLargeImage);

    if ($speaking->type === 'podcast') {
        $episode = Schema::podcastEpisode()
            ->name($speaking->title)
            ->url(url()->current())
            ->image($ogImage);

        if ($speaking->summary !== '') {
            $episode->description($speaking->summary);
        }

        if ($speaking->published_at) {
            $episode->datePublished($speaking->published_at);
        }

        if ($speaking->duration) {
            $episode->timeRequired(sprintf('PT%dM%dS', intdiv($speaking->duration, 60), $speaking->duration % 60));
        }

        if ($speaking->show_name) {
            $episode->partOfSeries(Schema::podcastSeries()->name($speaking->show_name));
        }

        Head::schema($episode);
    }
@endphp

<x-app>
    <article class="py-8 md:py-12">
        <header class="mb-10">
            <div class="flex flex-wrap items-center gap-3 text-sm text-gray-500">
                <time>{{ $speaking->published_at->format('F j, Y') }}</time>
                @if ($speaking->duration)
                    <span class="text-gray-700">&middot;</span>
                    <span>{{ $speaking->duration_mmss }}</span>
                @endif
            </div>
            <h1 class="mt-3 text-3xl font-bold tracking-tight text-white md:text-4xl">{{ $speaking->title }}</h1>
            @if ($speaking->show_name)
                <p class="mt-2 text-gray-400">{{ $speaking->show_name }}</p>
            @endif
        </header>

        @if ($speaking->video_embed_url)
            <div class="mb-10 aspect-video overflow-hidden rounded-xl bg-gray-900">
                <iframe
                    class="h-full w-full"
                    src="{{ $speaking->video_embed_url }}"
                    title="Video player for {{ $speaking->title }}"
                    frameborder="0"
                    allow="
                        accelerometer;
                        autoplay;
                        clipboard-write;
                        encrypted-media;
                        gyroscope;
                        picture-in-picture;
                        web-share;
                    "
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                ></iframe>
            </div>
        @endif

        @if ($speaking->embed_url)
            <div class="mb-10 overflow-hidden rounded-xl">
                <iframe
                    width="100%"
                    height="180"
                    frameborder="no"
                    scrolling="no"
                    seamless
                    src="{{ $speaking->embed_url }}?color=1F2937&background=0a0a0a"
                ></iframe>
            </div>
        @endif

        @if ($speaking->description)
            <div class="prose prose-lg prose-invert prose-p:text-gray-300 max-w-none">
                {!! $speaking->description !!}
            </div>
        @endif

        @if (file_exists($speaking->transcript))
            <section class="mt-16 border-t border-white/10 pt-12">
                <h2 class="text-xl font-semibold text-white">Transcript</h2>
                <div class="mt-6 rounded-xl bg-white/5 p-6 ring-1 ring-white/10">
                    <div class="prose prose-sm prose-invert max-w-none text-gray-400">
                        {!! nl2br(e(file_get_contents($speaking->transcript))) !!}
                    </div>
                </div>
            </section>
        @endif
    </article>
</x-app>
