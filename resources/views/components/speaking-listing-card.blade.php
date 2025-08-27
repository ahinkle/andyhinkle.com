<article
    class="group overflow-hidden rounded-lg border border-white/10 bg-white/5 backdrop-blur-sm transition-all duration-300 hover:scale-[1.02] hover:border-white/20 hover:bg-white/10">
    @if ($item->video_thumbnail)
        <a href="{{ url("speaking/{$item->slug}") }}" class="block aspect-video overflow-hidden">
            <img src="{{ $item->video_thumbnail }}" alt="{{ $item->title }}"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
        </a>
    @endif

    <div class="space-y-4 p-6">
        <div class="flex items-center justify-between text-sm text-white/60">
            <time datetime="{{ $item->published_at->toISOString() }}">
                {{ $item->published_at->format('M j, Y') }}
            </time>
            @if ($item->duration)
                <span class="flex items-center gap-1">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    {{ $item->duration_mmss }}
                </span>
            @endif
        </div>

        @if ($item->context_name)
            <div class="text-xs font-medium uppercase tracking-wider text-blue-400">
                {{ $item->context_name }}
            </div>
        @endif

        <h2 class="text-lg font-semibold leading-tight text-white transition-colors group-hover:text-blue-300">
            {{ $item->title }}
        </h2>

        <p class="line-clamp-3 text-sm leading-relaxed text-white/75">
            {{ $item->summary }}
        </p>

        <div class="flex items-center justify-between">
            <a href="{{ url("speaking/{$item->slug}") }}"
                class="inline-flex items-center gap-2 text-sm font-medium text-blue-400 transition-colors hover:text-blue-300">
                @if ($item->type === 'podcast')
                    Listen Now
                @else
                    Watch Now
                @endif
                <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>

            @if ($item->type)
                <span class="rounded-full bg-white/5 px-2 py-1 text-xs font-medium text-white/60">
                    {{ $item->type_label }}
                </span>
            @endif
        </div>
    </div>
</article>
