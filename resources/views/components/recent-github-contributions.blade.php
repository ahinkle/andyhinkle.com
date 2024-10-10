<ul role="list" class="space-y-6 py-6 px-2">
    @foreach ($contributions as $key => $contribution)
        <li class="relative flex gap-x-4">
            <div class="absolute -bottom-6 left-0 top-0 flex w-6 justify-center">
                <div class="w-px bg-gray-500"></div>
            </div>
            <img src="{{ $contribution['avatar_url'] }}"
                alt="" class="relative mt-3 h-6 w-6 flex-none rounded-full bg-gray-50">
            <div class="pt-3 w-full">
                <div class="flex justify-between">
                    <div class="text-white/75 text-sm">
                        <a class="text-blue-500/75" href="https://github.com/ahinkle" target="_blank" noopener noreferrer>
                            Andy Hinkle
                        </a>
                        <span>contributed to</span>
                        <a class="font-medium text-blue-500/75" href="{{ $contribution['url'] }}" target="_blank" noopener noreferrer>
                            {{ $contribution['owner'] }}/{{ $contribution['repository'] }}:
                        </a>
                    </div>
                    <time datetime="2023-01-23T15:56" class="flex justify-end py-0.5 text-xs leading-5 text-gray-400">
                        @if ($contribution['merged_at']->format('Y') !== now()->format('Y'))
                            {{ $contribution['merged_at']->format('M j, Y') }}
                        @else
                            {{ $contribution['merged_at']->format('M j') }}
                        @endif
                    </time>
                </div>
                <div class="flex-auto rounded-md p-3 ring-1 ring-inset ring-gray-500/50 mt-2">
                    <div class="flex gap-x-2">
                        <div class="flex gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 fill-purple-500 mt-1">
                                <path d="M80 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm32.4 97.2c28-12.4 47.6-40.5 47.6-73.2c0-44.2-35.8-80-80-80S0 35.8 0 80c0 32.8 19.7 61 48 73.3l0 205.3C19.7 371 0 399.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-32.8-19.7-61-48-73.3l0-86.6c26.7 20.1 60 32 96 32l86.7 0c12.3 28.3 40.5 48 73.3 48c44.2 0 80-35.8 80-80s-35.8-80-80-80c-32.8 0-61 19.7-73.3 48L208 240c-49.9 0-91-38.1-95.6-86.8zM80 408a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM344 272a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3>
                                <a class="font-medium text-blue-500/75" href="{{ $contribution['url'] }}" target="_blank" noopener noreferrer>
                                    {{ $contribution['title'] }}
                                </a>
                            </h3>

                            <div class="text-gray-200/75 pt-2">
                                <p class="text-sm">
                                    {{ str()->limit($contribution['body'], 250) }}
                                </p>
                            </div>

                            <div class="mt-2">
                                <div class="text-gray-400 text-xs">
                                    <span class="text-green-500">+{{ $contribution['additions'] }}</span>
                                    <span class="text-gray-200/75 text-xs">/</span>
                                    <span class="text-red-500">-{{ $contribution['deletions'] }}</span>
                                    <span class="text-gray-200/75">Lines Changed</span>
                                    @if ($contribution['comments'] > 0)
                                        <span class="mx-1">•</span>
                                        <span>{{ $contribution['comments'] }} {{ str('comment')->plural($contribution['comments']) }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</ul>
