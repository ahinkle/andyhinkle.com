<x-app>
    <x-slot name="seo">
        <title>{{ $speaking->title }} | {{ $speaking->show_title }}</title>
        <meta name="description" content="{{ $speaking->summary }}">
        <meta property="og:title" content="{{ $speaking->title }}">
        <meta property="og:description" content="{{ $speaking->summary }}">
    </x-slot>

    <p class="py-2 text-center font-sans text-sm text-white/75">{{ $speaking->published_at->format('F j, Y') }}</p>
    <h1 class="text-center font-sans text-3xl font-bold text-white md:text-5xl">
        {{ $speaking->title }}
    </h1>

    <div class="mx-auto mt-8 max-w-3xl">
        <div class="px-4 pb-10">
            <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless=""
                src="{{ $speaking->embed_url }}?color=1F2937&background=101827"></iframe>
        </div>

        <div class="prose prose-lg px-4 dark:prose-invert">
            {!! $speaking->description !!}
        </div>

        <div class="mt-8 px-4">
            <iframe class="h-96 w-full" src="{{ $speaking->video_url }}" title="Video player for {{ $speaking->title }}"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
</x-app>
