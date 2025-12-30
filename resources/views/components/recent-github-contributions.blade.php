<div class="mt-8 divide-y divide-white/5">
    @foreach ($contributions->take(5) as $contribution)
        @if ($contribution['title'] !== '')
            <a href="{{ $contribution['url'] }}" target="_blank" rel="noopener noreferrer"
                class="group -mx-4 flex items-baseline justify-between gap-4 rounded-lg px-4 py-4 transition-colors hover:bg-white/5">
                <div class="min-w-0">
                    <span
                        class="text-sm text-gray-500">{{ $contribution['owner'] }}/{{ $contribution['repository'] }}</span>
                    <p class="mt-1 truncate text-white group-hover:text-white">{{ $contribution['title'] }}</p>
                </div>
                <span class="shrink-0 text-sm text-gray-600">{{ $contribution['merged_at']->format('M j') }}</span>
            </a>
        @endif
    @endforeach
</div>
