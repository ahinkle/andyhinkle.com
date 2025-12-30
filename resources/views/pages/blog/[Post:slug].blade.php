@php
    use function Laravel\Folio\name;
    use League\CommonMark\Environment\Environment;
    use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
    use League\CommonMark\MarkdownConverter;
    use Torchlight\Commonmark\V2\TorchlightExtension;

    name('blog.show');

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

    <article class="py-8 md:py-12">
        <header class="mb-12">
            <time class="text-sm text-gray-500">{{ $post->formatted_date }}</time>
            <h1 class="mt-3 text-3xl font-bold tracking-tight text-white md:text-4xl lg:text-5xl">
                {{ $post->title }}
            </h1>
        </header>

        <div
            class="prose prose-lg prose-invert max-w-none prose-headings:font-semibold prose-headings:tracking-tight prose-a:text-gray-300 prose-a:underline prose-a:decoration-gray-600 prose-a:underline-offset-2 hover:prose-a:decoration-gray-400 prose-code:text-gray-300 prose-pre:bg-gray-900 prose-pre:p-0 [&_pre]:overflow-x-auto [&_pre]:rounded-lg">
            {!! $htmlContent !!}
        </div>

        <footer class="mt-16 border-t border-white/10 pt-8">
            <a href="https://github.com/ahinkle/andyhinkle.com/blob/main/resources/content/blog/{{ $post->slug }}.md"
                target="_blank" rel="noopener noreferrer"
                class="inline-flex items-center gap-2 text-sm text-gray-500 transition-colors hover:text-white">
                <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                Suggest an edit on GitHub
            </a>
        </footer>
    </article>
</x-app>
