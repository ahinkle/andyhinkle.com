<ul role="list" class="space-y-6 py-6 px-2">
    @foreach ($contributions as $contribution)
        <li class="relative flex gap-x-4">
            <div class="absolute -bottom-6 left-0 top-0 flex w-6 justify-center">
            <div class="w-px bg-gray-500"></div>
            </div>
            <img src="https://github.com/{{ $contribution['repository']['owner']['login'] }}.png"
                alt="" class="relative mt-3 h-6 w-6 flex-none rounded-full bg-gray-50">
            <div>
                <p class="text-gray-500 text-sm">
                    <span class="text-blue-500/75">Andy Hinkle</span> contributed to <span class="font-medium text-blue-500/75">{{ $contribution['repository']['owner']['login'] }}/{{ $contribution['repository']['name'] }}:
                    </span>
                </p>
                <div class="flex-auto rounded-md p-3 ring-1 ring-inset ring-gray-200">
                <div class="flex justify-between gap-x-4">
                    <div class="py-0.5 text-xs leading-5 text-gray-400">
                    desc</div>
                    <time datetime="2023-01-23T15:56" class="flex-none py-0.5 text-xs leading-5 text-gray-500">3d ago</time>
                </div>
                <p class="text-sm leading-6 text-gray-500">@dump($contribution)</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
