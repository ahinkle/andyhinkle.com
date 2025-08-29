<div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
    @foreach ($podcasts as $episode)
        <article
            class="group overflow-hidden rounded-lg border border-white/10 bg-white/5 backdrop-blur-sm transition-all duration-300 hover:scale-[1.02] hover:border-white/20 hover:bg-white/10">
            @if ($episode->video_thumbnail)
                <a href="{{ url("speaking/{$episode->slug}") }}" class="block aspect-video overflow-hidden">
                    <img src="{{ $episode->video_thumbnail }}" alt="{{ $episode->title }}"
                        class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                </a>
            @endif

            <div class="space-y-4 p-6">
                <div class="flex items-center justify-between text-sm text-white/60">
                    <time datetime="{{ $episode->published_at->toISOString() }}">
                        {{ $episode->published_at->format('M j, Y') }}
                    </time>
                    @if ($episode->duration)
                        <span class="flex items-center gap-1">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ $episode->duration_mmss }}
                        </span>
                    @endif
                </div>

                @if ($episode->show_name)
                    <div class="text-xs font-medium uppercase tracking-wider text-blue-400">
                        {{ $episode->show_name }}
                    </div>
                @endif

                <h2 class="text-lg font-semibold leading-tight text-white transition-colors group-hover:text-blue-300">
                    {{ $episode->title }}
                </h2>

                <p class="line-clamp-3 text-sm leading-relaxed text-white/75">
                    {{ $episode->summary }}
                </p>

                <a href="{{ url("speaking/{$episode->slug}") }}"
                    class="inline-flex items-center gap-2 text-sm font-medium text-blue-400 transition-colors hover:text-blue-300">
                    Listen Now
                    <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </article>
    @endforeach
</div>
