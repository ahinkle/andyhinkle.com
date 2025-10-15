<div class="mx-auto max-w-4xl space-y-6">
    @foreach ($posts as $post)
        <article class="group rounded-lg border border-gray-700 bg-gray-900/20 p-8 transition-all hover:border-gray-500 hover:bg-gray-900/40">
            <!-- Date -->
            <time class="mb-3 block text-sm text-gray-400">
                {{ $post->formatted_date }}
            </time>

            <!-- Title -->
            <h2 class="mb-3 text-2xl font-bold text-white">
                <a href="{{ url('/blog/' . $post->slug) }}" class="hover:text-gray-300">
                    {{ $post->title }}
                </a>
            </h2>

            <!-- Description -->
            <p class="mb-4 leading-relaxed text-gray-400">
                {{ $post->description }}
            </p>

            <!-- Read More Link -->
            <a href="{{ url('/blog/' . $post->slug) }}" class="inline-flex items-center gap-2 text-sm font-medium text-gray-500 transition-all hover:gap-3 hover:text-white">
                <span>Read more</span>
                <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </article>
    @endforeach
</div>
