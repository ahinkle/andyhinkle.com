<div class="grid gap-12 gap-y-4 py-4 md:gap-y-8 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
    @foreach ($posts as $post)
        <div class="flex h-full flex-col rounded-sm border border-gray-500/50 p-4 hover:border-gray-500/75">
            <a class="flex h-full flex-col" href="{{ url('/blog/' . $post->slug) }}">
                <div class="h-16 flex-none overflow-hidden">
                    <p class="line-clamp-2 text-lg font-semibold text-white">{{ $post->title }}</p>
                </div>
                <div class="mt-3 grow">
                    <p class="line-clamp-3 text-sm text-gray-300">{{ str($post->description)->words(20) }}</p>
                </div>
                <div class="mt-3 flex-none">
                    <p class="flex items-center justify-between text-xs text-white">
                        <time
                            datetime="{{ $post->published_at->format('Y-m-d') }}">{{ $post->published_at->format('M j, Y') }}</time>
                        <span>Continue Reading <span class="ml-1">&#8594;</span></span>
                    </p>
                </div>
            </a>
        </div>
    @endforeach
</div>
