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
        <meta property="og:type" content="article">
        <meta property="og:title" content="{{ $post->title }}">
        <meta property="og:description" content="{{ $post->description }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset("images/share/og/blog/{$post->slug}.png") }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $post->title }}">
        <meta name="twitter:description" content="{{ $post->description }}">
        <meta name="twitter:image" content="{{ asset("images/share/og/blog/{$post->slug}.png") }}">
    </x-slot>

    <p class="py-2 text-center font-sans text-sm text-white/75">{{ $post->formatted_date }}</p>
    <h1 class="text-center font-sans text-3xl font-bold text-white md:text-5xl">{{ $post->title }}</h1>

    <div class="mx-auto mt-8 max-w-3xl">
        <div
            class="prose prose-lg dark:prose-invert mx-auto px-4 text-white/85 [&_pre]:my-4 [&_pre]:overflow-x-auto [&_pre]:rounded-sm [&_pre]:bg-gray-800 [&_pre]:p-0">
            {!! $htmlContent !!}
        </div>

        <div class="mt-8 px-4 text-right">
            <a href="https://github.com/ahinkle/andyhinkle.com/blob/main/resources/content/blog/{{ $post->slug }}.md"
                target="_blank" rel="noopener noreferrer"
                class="inline-flex items-center gap-1 font-sans text-sm text-white/50 transition-colors hover:text-white/75">
                <span>Suggest an edit</span>
                <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
        </div>
    </div>
</x-app>
