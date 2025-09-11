<!doctype html>
<html lang="en">

<head>
    <x-layout.seo-meta>
        {{ $seo }}
    </x-layout.seo-meta>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dark">
    @env('local')
        <x-dev.dev-toolbar />
    @endenv

    <div class="h-full bg-gray-100 p-0 md:p-5 dark:bg-gray-900">
        <div class="max-w-(--breakpoint-lg) relative mx-auto bg-white p-4 pb-10 md:rounded-lg dark:bg-gray-800">
            <x-layout.header />
            {{ $slot }}
        </div>
    </div>

    <footer class="pb-5 pt-5 text-center text-xs text-gray-800 dark:bg-gray-900 dark:text-gray-400">
        <p>&copy; {{ date('Y') }} andyhinkle.com, All rights reserved.</p>
        @if (Str::contains(Request::url(), 'blog'))
            <p class="pb-2 pt-4">Code highlighting provided by <a href="https://torchlight.dev/" target="_blank"
                    rel="noopener" class="underline">Torchlight</a>.</p>
        @endif
    </footer>
</body>

</html>
