<div class="mx-auto max-w-4xl space-y-6">
    @foreach ($posts as $post)
        <article
            class="group relative rounded-xl border border-white/[0.05] bg-white/[0.02] p-8 backdrop-blur-sm transition-all duration-300 hover:border-white/10 hover:bg-white/[0.04]">
            <!-- Date -->
            <div class="mb-4 flex items-center gap-2 text-slate-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4"
                    aria-hidden="true">
                    <path d="M8 2v4"></path>
                    <path d="M16 2v4"></path>
                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                    <path d="M3 10h18"></path>
                </svg>
                <time class="text-sm">{{ $post->formatted_date }}</time>
            </div>

            <!-- Title -->
            <h2 class="mb-4 text-slate-100 transition-colors duration-300 group-hover:text-white">
                <a href="{{ url('/blog/' . $post->slug) }}">
                    {{ $post->title }}
                </a>
            </h2>

            <!-- Description -->
            <p class="mb-6 leading-relaxed text-slate-400">
                {{ $post->description }}
            </p>

            <!-- Read More Link -->
            <a href="{{ url('/blog/' . $post->slug) }}"
                class="inline-flex items-center gap-2 text-slate-500 transition-colors duration-200 hover:text-slate-300">
                <span>Read article</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="size-4 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
            </a>
        </article>
    @endforeach
</div>
