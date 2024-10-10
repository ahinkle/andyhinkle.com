<div class="grid gap-12 py-4 lg:grid-cols-3 lg:gap-x-5 gap-y-4 md:gap-y-8 lg:gap-y-12">
    @foreach ($posts as $post)
        <div class="border border-gray-500/50 rounded p-4 flex flex-col h-full hover:border-gray-500/75">
            <a class="flex flex-col h-full" href="{{ url($post['slug']) }}">
                <div class="flex-none h-16 overflow-hidden">
                    <p class="text-lg font-semibold text-white line-clamp-2">{{ $post['title'] }}</p>
                </div>
                <div class="mt-3 flex-grow">
                    <p class="text-sm text-gray-300 line-clamp-3">{{ str($post['description'])->words(20) }}</p>
                </div>
                <div class="mt-3 flex-none">
                    <p class="flex items-center justify-between text-white text-xs">
                        <time
                            datetime="{{ $post['date']->format('Y-m-d') }}">{{ $post['date']->format('F j, Y') }}</time>
                        <span>Continue Reading <span class="ml-1">&#8594;</span></span>
                    </p>
                </div>
            </a>
        </div>
    @endforeach
</div>
