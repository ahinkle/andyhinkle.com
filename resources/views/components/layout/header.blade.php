<header class="mb-12 flex flex-col items-center gap-6 sm:flex-row sm:items-center sm:gap-8">
    <a href="{{ url('/') }}" class="group shrink-0" aria-label="Back to homepage">
        <img alt="Andy Hinkle"
            class="size-14 rounded-full ring-2 ring-white/10 transition-all duration-300 group-hover:scale-105 group-hover:ring-white/25"
            src="{{ url('images/andy-hinkle-128.jpeg') }}"
            srcset="{{ url('images/andy-hinkle-128.jpeg') }} 1x, {{ url('images/andy-hinkle-256.jpeg') }} 2x">
    </a>

    <nav class="flex flex-wrap items-center justify-center gap-1 sm:justify-start">
        <a href="{{ url('/') }}"
            class="{{ request()->is('/') ? 'bg-white/10 text-white' : 'text-gray-500 hover:text-white' }} rounded-full px-4 py-2 text-sm transition-colors duration-200">
            Home
        </a>
        <a href="{{ url('/blog') }}"
            class="{{ request()->is('blog*') ? 'bg-white/10 text-white' : 'text-gray-500 hover:text-white' }} rounded-full px-4 py-2 text-sm transition-colors duration-200">
            Blog
        </a>
        <a href="{{ url('/speaking') }}"
            class="{{ request()->is('speaking*') ? 'bg-white/10 text-white' : 'text-gray-500 hover:text-white' }} rounded-full px-4 py-2 text-sm transition-colors duration-200">
            Speaking
        </a>
        <a href="{{ url('/gear') }}"
            class="{{ request()->is('gear*') ? 'bg-white/10 text-white' : 'text-gray-500 hover:text-white' }} rounded-full px-4 py-2 text-sm transition-colors duration-200">
            Gear
        </a>
    </nav>
</header>
