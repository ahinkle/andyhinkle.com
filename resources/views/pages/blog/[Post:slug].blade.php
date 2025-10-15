@php
use function Laravel\Folio\name;
use League\CommonMark\CommonMarkConverter;

name('blog.show');

$converter = new CommonMarkConverter([
    'html_input' => 'allow',
    'allow_unsafe_links' => false,
]);

$htmlContent = $converter->convert($post->content);
@endphp

<x-app>
    <x-slot name="seo">
        <title>{{ $post->title }}</title>
        <meta name="description" content="{{ $post->description }}">
    </x-slot>

    <p class="py-2 text-center font-sans text-sm text-white/75">{{ $post->formatted_date }}</p>
    <h1 class="text-center font-sans text-3xl font-bold text-white md:text-5xl">{{ $post->title }}</h1>

    <div class="mx-auto mt-8 max-w-3xl">
        <div class="prose prose-lg dark:prose-invert mx-auto px-4 text-white/85">
            {!! $htmlContent !!}
        </div>
    </div>
</x-app>
