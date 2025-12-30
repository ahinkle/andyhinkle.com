<a href="{{ url("speaking/{$item->slug}") }}"
    class="group relative block overflow-hidden rounded-xl bg-white/5 ring-1 ring-white/10 transition-all hover:bg-white/10 hover:ring-white/20">
    @if ($item->video_thumbnail)
        <div class="aspect-video overflow-hidden">
            <img src="{{ $item->video_thumbnail }}" alt="{{ $item->title }}"
                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
            <div class="absolute inset-0 flex items-center justify-center bg-black/20">
                <div
                    class="flex size-12 items-center justify-center rounded-full bg-white/90 text-gray-900 transition-transform group-hover:scale-110">
                    <svg class="ml-0.5 size-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z" />
                    </svg>
                </div>
            </div>
        </div>
    @endif

    <div class="p-5">
        @if ($item->context_name)
            <p class="text-xs text-gray-500">{{ $item->context_name }}</p>
        @endif
        <h3 class="mt-2 line-clamp-2 font-medium text-white">{{ $item->title }}</h3>
        <p class="mt-2 line-clamp-2 text-sm text-gray-400">{{ $item->summary }}</p>
        <div class="mt-4 flex items-center justify-between text-xs text-gray-500">
            <time datetime="{{ $item->published_at->toISOString() }}">
                {{ $item->published_at->format('M j, Y') }}
            </time>
            @if ($item->duration)
                <span>{{ $item->duration_mmss }}</span>
            @endif
        </div>
    </div>
</a>
