<a href="{{ $href }}">
    <button @class([
        'text-sm transition-colors px-4 py-1 rounded-md relative',
        'text-white bg-gray-900 dark:bg-gray-700 dark:border dark:border-white/15' => $href === request()->url() || (str_contains(request()->url(), 'blog') && str_contains($href, 'blog')),
        'text-gray-900 hover:bg-gray-100 dark:text-gray-100 dark:hover:bg-gray-700 dark:border dark:border-gray-700/25' => $href !== request()->url() && !(str_contains(request()->url(), 'blog') && str_contains($href, 'blog')),
    ])>
        <span class="relative z-10">{{ $slot }}</span>
    </button>
</a>
