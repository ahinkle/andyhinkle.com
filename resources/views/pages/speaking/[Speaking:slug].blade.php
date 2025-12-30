<x-app>
    <x-slot name="seo">
        <title>{{ $speaking->title }} | {{ $speaking->show_title }}</title>
        <meta name="description" content="{{ $speaking->summary }}">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{{ $speaking->title }}">
        <meta property="og:description" content="{{ $speaking->summary }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset("images/share/og/speaking/{$speaking->slug}.png") }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $speaking->title }}">
        <meta name="twitter:description" content="{{ $speaking->summary }}">
        <meta name="twitter:image" content="{{ asset("images/share/og/speaking/{$speaking->slug}.png") }}">
    </x-slot>

    <article class="py-8 md:py-12">
        <header class="mb-10">
            <div class="flex flex-wrap items-center gap-3 text-sm text-gray-500">
                <time>{{ $speaking->published_at->format('F j, Y') }}</time>
                @if ($speaking->duration)
                    <span class="text-gray-700">&middot;</span>
                    <span>{{ $speaking->duration_mmss }}</span>
                @endif
            </div>
            <h1 class="mt-3 text-3xl font-bold tracking-tight text-white md:text-4xl">
                {{ $speaking->title }}
            </h1>
            @if ($speaking->show_name)
                <p class="mt-2 text-gray-400">{{ $speaking->show_name }}</p>
            @endif
        </header>

        @if ($speaking->video_embed_url)
            <div class="mb-10 aspect-video overflow-hidden rounded-xl bg-gray-900">
                <iframe class="h-full w-full" src="{{ $speaking->video_embed_url }}"
                    title="Video player for {{ $speaking->title }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        @endif

        @if ($speaking->embed_url)
            <div class="mb-10 overflow-hidden rounded-xl">
                <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless
                    src="{{ $speaking->embed_url }}?color=1F2937&background=0a0a0a"></iframe>
            </div>
        @endif

        @if ($speaking->description)
            <div class="prose prose-lg prose-invert max-w-none prose-p:text-gray-300">
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
