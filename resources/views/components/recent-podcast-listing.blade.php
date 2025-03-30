<div class="grid gap-12 gap-y-4 py-4 md:gap-y-8 lg:grid-cols-3 lg:gap-x-4 lg:gap-y-12">
    @foreach ($podcasts as $podcast)
        @dump($podcast)
        <a class="group rounded-lg bg-gray-900 p-4" href="{{ url($podcast['slug']) }}">
            <div class="grid grid-cols-1 gap-4">
                <div class="col-span-1">
                    <div class="relative flex items-center justify-between">
                        <img src="{{ $podcast['youtube_thumbnail'] }}" alt="{{ $podcast['title'] }}"
                            class="h-full w-full rounded-lg object-cover">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            class="absolute h-14 w-full fill-current text-white">
                            <path
                                d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9l0 176c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z" />
                        </svg>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="flex h-full flex-col">
                        <div class="h-16 flex-none overflow-hidden">
                            <p class="line-clamp-2 text-lg font-semibold text-white">{{ $podcast['title'] }}</p>
                        </div>
                        <div class="mt-3 flex-grow">
                            <p class="line-clamp-3 text-sm text-gray-300">{{ str($podcast['description'])->words(20) }}
                            </p>
                        </div>
                        <div class="mt-4 flex-none">
                            <p class="flex items-center justify-between text-xs text-white">
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="mb-0.5 mr-1 h-3 w-3 fill-current text-gray-300">
                                        <path
                                            d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l352 0 0 256c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256z" />
                                    </svg>
                                    <time
                                        datetime="{{ $podcast['date']->format('Y-m-d') }}">{{ $podcast['date']->format('M j, Y') }}</time>
                                </span>
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="mr-1 h-3 w-3 fill-current text-gray-300" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10S15.523 0 10 0zm0 18c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8zm-1-13a1 1 0 0 1 2 0v5a1 1 0 0 1-2 0V5z" />
                                    </svg>
                                    {{ $podcast['duration'] }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>
