<!doctype html>
<html lang="en" class="dark">

<head>
    <x-layout.seo-meta>
        {{ $seo }}
    </x-layout.seo-meta>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-950 text-gray-100 antialiased">
    @env('local')
        <x-dev.dev-toolbar />
    @endenv

    <div class="min-h-screen">
        <div class="mx-auto max-w-3xl px-6 py-12 lg:px-8 lg:py-20">
            <x-layout.header />
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

    <footer class="border-t border-white/5 bg-gray-950">
        <div class="mx-auto max-w-3xl px-6 py-8 lg:px-8">
            <p class="text-center text-sm text-gray-600">
                &copy; {{ date('Y') }} Andy Hinkle
            </p>
            @if (Str::contains(Request::url(), 'blog'))
                <p class="mt-2 text-center text-xs text-gray-700">
                    Syntax highlighting by <a href="https://torchlight.dev/" target="_blank" rel="noopener"
                        class="text-gray-500 hover:text-gray-400">Torchlight</a>
                </p>
            @endif
        </div>
    </footer>
</body>

</html>
