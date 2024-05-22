<!doctype html>
<html lang="en">
    <head>
        <x-layout.seo-meta>
            {{ $seo }}
        </x-layout.seo-meta>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>
    <body class="h-screen dark">
        @env('local')
            <x-dev.dev-toolbar />
        @endenv

        <div class="bg-gray-100 h-full p-0 md:p-5 dark:bg-gray-900">
            <div class="max-w-screen-lg bg-white mx-auto p-4 md:rounded-lg dark:bg-gray-800 relative">
                <x-layout.header />
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
