@php
    use Laravel\Head\Facades\Head;

    Head::title('Speaking')->description('A collection of talks and presentations by Andy Hinkle.');
@endphp

<x-app>
    <section class="py-8 md:py-12">
        <h1 class="text-3xl font-bold tracking-tight text-white md:text-4xl">Speaking</h1>
        <p class="mt-4 text-lg text-gray-400">
            Podcasts and conversations about Laravel, web development, and the craft of building software.
        </p>
    </section>

    <x-speaking-listing />
</x-app>
