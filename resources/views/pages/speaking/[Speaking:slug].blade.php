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
        @if ($speaking->embed_url)
            <div class="px-4 pb-10">
                <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless=""
                    src="{{ $speaking->embed_url }}?color=1F2937&background=101827"></iframe>
            </div>
        @endif

        <div class="prose prose-lg dark:prose-invert px-4">
            {!! $speaking->description !!}
        </div>

        <div class="mt-8 px-4">
            <iframe class="h-96 w-full" src="{{ $speaking->video_embed_url }}"
                title="Video player for {{ $speaking->title }}" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscree n></iframe>
        </div>

        <div class="mt-12 px-4">
            <h2 class="mb-6 font-sans text-2xl font-bold text-white">Transcript</h2>
            <div class="rounded-sm bg-gray-800 p-6">
                @if (file_exists($speaking->transcript))
                    <div class="prose prose-sm max-w-none text-gray-300">
                        {!! nl2br(e(file_get_contents($speaking->transcript))) !!}
                    </div>
                @else
                    <p class="text-gray-400">No transcript available for this
                        {{ $speaking->type === 'speaking' ? 'talk' : 'episode' }}.</p>
                @endif
            </div>
        </div>
</x-app>
