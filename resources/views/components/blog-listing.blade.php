<div class="space-y-4 max-w-3xl mx-auto">
    @foreach ($posts as $post)
        <div class="border border-gray-500 rounded py-4 px-4 md:px-8">
            <p class="text-white/75 text-center text-sm py-2 font-sans">
                {{ $post['date']->format('F j, Y') }}
            </p>
            <h2 class="text-2xl font-semibold text-white text-center">
                {{ $post['title'] }}
            </h2>
            <p class="text-white/75 pt-6">
                {{ $post['description'] }}
            </p>
            <a href="{{ url($post['slug']) }}" class="text-white/50 hover:text-white underline block text-center pt-4">
                Read more
            </a>
        </div>
    @endforeach
</div>
