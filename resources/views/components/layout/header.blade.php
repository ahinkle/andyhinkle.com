<header class="mb-8 flex flex-col items-center gap-6 sm:flex-row sm:items-start sm:gap-8">
    <a href="{{ url('/') }}" class="shrink-0" aria-label="Back to homepage">
        <img alt="Andy Hinkle"
            class="size-20 rounded-full ring-2 ring-white/10 transition-all hover:ring-white/20 sm:size-24"
            src="{{ url('images/andy-hinkle-128.jpeg') }}"
            srcset="{{ url('images/andy-hinkle-128.jpeg') }} 1x, {{ url('images/andy-hinkle-256.jpeg') }} 2x">
    </a>

    <nav class="flex flex-wrap items-center justify-center gap-1 sm:justify-start">
        <a href="{{ url('/') }}"
            class="rounded-full px-4 py-2 text-sm font-medium transition-colors {{ request()->is('/') ? 'bg-white/10 text-white' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
            Home
        </a>
        <a href="{{ url('/blog') }}"
            class="rounded-full px-4 py-2 text-sm font-medium transition-colors {{ request()->is('blog*') ? 'bg-white/10 text-white' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
            Blog
        </a>
        <a href="{{ url('/speaking') }}"
            class="rounded-full px-4 py-2 text-sm font-medium transition-colors {{ request()->is('speaking*') ? 'bg-white/10 text-white' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
            Speaking
        </a>
        <a href="{{ url('/gear') }}"
            class="rounded-full px-4 py-2 text-sm font-medium transition-colors {{ request()->is('gear*') ? 'bg-white/10 text-white' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
            Gear
        </a>
    </nav>
</header>
