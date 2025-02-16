<ul role="list" class="space-y-6 px-2 py-6">
    @foreach ($contributions as $key => $contribution)
        @if ($contribution->title !== '')
            <li class="relative flex gap-x-4">
                <div class="absolute -bottom-6 left-0 top-0 flex w-6 justify-center">
                    @if ($key !== $contributions->count() - 1)
                        <div class="w-px bg-gray-500"></div>
                    @endif
                </div>
                <img src="{{ $contribution['avatar_url'] }}" alt=""
                    class="relative mt-3 h-6 w-6 flex-none rounded-full bg-gray-50 transition-transform duration-150 hover:scale-105">
                <div class="w-full pt-3">
                    <div class="flex justify-between">
                        <div class="text-sm text-white/75">
                            <a class="text-blue-500/75 hover:underline" href="https://github.com/ahinkle" target="_blank"
                                noopener noreferrer>
                                Andy Hinkle
                            </a>
                            <span>contributed to</span>
                            <a class="text-blue-500/75 hover:underline" href="{{ $contribution['url'] }}" target="_blank"
                                noopener noreferrer>
                                {{ $contribution['owner'] }}/{{ $contribution['repository'] }}:
                            </a>
                        </div>
                        <time datetime="{{ $contribution['merged_at']->format('Y-m-d') }}"
                            class="hidden justify-end py-0.5 pl-1 text-xs leading-5 text-gray-400 md:flex">
                            @if ($contribution['merged_at']->format('Y') !== now()->format('Y'))
                                {{ $contribution['merged_at']->format('M j, Y') }}
                            @else
                                {{ $contribution['merged_at']->format('M j') }}
                            @endif
                        </time>
                    </div>
                    <div class="mt-2 flex-auto rounded-md p-4 ring-1 ring-inset ring-gray-500/50 lg:p-6">
                        <div class="flex gap-x-3">
                            <div class="flex gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="mt-1 h-4 w-4 fill-purple-500">
                                    <path
                                        d="M80 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm32.4 97.2c28-12.4 47.6-40.5 47.6-73.2c0-44.2-35.8-80-80-80S0 35.8 0 80c0 32.8 19.7 61 48 73.3l0 205.3C19.7 371 0 399.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-32.8-19.7-61-48-73.3l0-86.6c26.7 20.1 60 32 96 32l86.7 0c12.3 28.3 40.5 48 73.3 48c44.2 0 80-35.8 80-80s-35.8-80-80-80c-32.8 0-61 19.7-73.3 48L208 240c-49.9 0-91-38.1-95.6-86.8zM80 408a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM344 272a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z" />
                                </svg>
                            </div>
                            <div class="grid grid-cols-1 gap-y-4">
                                <h3>
                                    <a class="font-medium text-blue-500/75 hover:underline"
                                        href="{{ $contribution['url'] }}" target="_blank" noopener noreferrer>
                                        {{ $contribution['title'] }}
                                    </a>
                                </h3>

                                @if ($contribution['body'])
                                    <div class="text-gray-200/75">
                                        <p class="overflow-hidden text-sm">
                                            {{ str()->limit($contribution['body'], 250) }}
                                        </p>
                                    </div>
                                @endif

                                <div>
                                    <div class="text-xs text-gray-400">
                                        <span class="text-green-500">+{{ $contribution['additions'] }}</span>
                                        <span class="text-xs text-gray-200/75">/</span>
                                        <span class="text-red-500">-{{ $contribution['deletions'] }}</span>
                                        <span class="text-gray-200/75">Lines Changed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endif
    @endforeach
</ul>
