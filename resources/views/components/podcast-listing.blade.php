<div class="mx-auto max-w-5xl">
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($podcasts as $episode)
            <article class="group overflow-hidden rounded-lg bg-white/5 backdrop-blur-sm border border-white/10 transition-all duration-300 hover:bg-white/10 hover:border-white/20 hover:scale-[1.02]">
                @if ($episode->video_thumbnail)
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ $episode->video_thumbnail }}" 
                             alt="{{ $episode->title }}" 
                             class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                @endif
                
                <div class="p-6 space-y-4">
                    <div class="flex items-center justify-between text-sm text-white/60">
                        <time datetime="{{ $episode->published_at->toISOString() }}">
                            {{ $episode->published_at->format('M j, Y') }}
                        </time>
                        @if ($episode->duration)
                            <span class="flex items-center gap-1">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $episode->duration_mmss }}
                            </span>
                        @endif
                    </div>
                    
                    @if ($episode->show_name)
                        <div class="text-xs font-medium text-blue-400 uppercase tracking-wider">
                            {{ $episode->show_name }}
                        </div>
                    @endif
                    
                    <h2 class="text-lg font-semibold text-white leading-tight group-hover:text-blue-300 transition-colors">
                        {{ $episode->title }}
                    </h2>
                    
                    <p class="text-sm text-white/75 line-clamp-3 leading-relaxed">
                        {{ $episode->summary }}
                    </p>
                    
                    <a href="{{ url("speaking/{$episode->slug}") }}" 
                       class="inline-flex items-center gap-2 text-sm font-medium text-blue-400 hover:text-blue-300 transition-colors">
                        Listen Now
                        <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>
        @endforeach
    </div>
</div>
