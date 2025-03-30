<div class="mx-auto max-w-3xl space-y-4">
    @foreach ($podcasts as $episode)
        <div class="rounded border border-gray-500 px-4 py-4 md:px-8">
            <p class="py-2 text-center font-sans text-sm text-white/75">
                {{ $episode->published_at->format('F j, Y') }}
            </p>
            <h2 class="text-center text-2xl font-semibold text-white">
                {{ $episode->title }}
            </h2>
            <p class="pt-6 text-white/75">
                {{ $episode->summary }}
            </p>
            <a href="{{ url("speaking/{$episode->slug}") }}" class="block pt-4 text-center text-white/50 underline hover:text-white">
                Listen Now
            </a>
        </div>
    @endforeach
</div>
