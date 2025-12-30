<div class="divide-y divide-white/5">
    @foreach ($posts as $post)
        <article class="group py-8 first:pt-0">
            <a href="{{ url('/blog/' . $post->slug) }}" class="block">
                <time class="text-sm text-gray-500">{{ $post->formatted_date }}</time>
                <h2 class="mt-2 text-xl font-medium text-white transition-colors group-hover:text-gray-300">
                    {{ $post->title }}
                </h2>
                <p class="mt-3 leading-relaxed text-gray-400">
                    {{ $post->description }}
                </p>
                <span
                    class="mt-4 inline-flex items-center gap-1 text-sm text-gray-500 transition-colors group-hover:text-white">
                    Read article
                    <svg class="size-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>
            </a>
        </article>
    @endforeach
</div>
