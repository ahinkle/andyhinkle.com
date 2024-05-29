<!doctype html>
<html lang="en">
    <head>
        <x-layout.seo-meta>
            {{ $seo }}
        </x-layout.seo-meta>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=open-sans:300,300i,500,700&display=swap" rel="stylesheet" />
    </head>
    <body class="dark">
        @env('local')
            <x-dev.dev-toolbar />
        @endenv

        <div class="bg-gray-100 h-full p-0 md:p-5 dark:bg-gray-900">
            <div class="max-w-screen-lg bg-white mx-auto p-4 md:rounded-lg dark:bg-gray-800 relative min-h-[100rem]">
                <x-layout.header />
                {{ $slot }}
            </div>
        </div>

        <footer class="text-gray-800 dark:text-gray-400 text-center pt-5 text-xs dark:bg-gray-900 pb-5">
            <p>&copy; {{ date('Y') }} andyhinkle.com, All rights reserved.</p>
        </footer>
    </body>
</html>
