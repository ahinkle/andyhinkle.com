@php
use function Laravel\Folio\name;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\MarkdownConverter;
use Torchlight\Commonmark\V2\TorchlightExtension;

name('blog.show');

// Configure the environment with Torchlight
$environment = new Environment([
    'html_input' => 'allow',
    'allow_unsafe_links' => false,
]);

$environment->addExtension(new CommonMarkCoreExtension());
$environment->addExtension(new TorchlightExtension());

$converter = new MarkdownConverter($environment);
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
        <div class="prose prose-lg dark:prose-invert mx-auto px-4 text-white/85 [&_pre]:p-0 [&_pre]:my-4 [&_pre]:rounded-sm [&_pre]:overflow-x-auto [&_pre]:bg-gray-800">
            {!! $htmlContent !!}
        </div>
    </div>
</x-app>
