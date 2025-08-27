<div x-data="{ activeTab: 'all' }">
    <!-- Tab Navigation -->
    <div class="mb-8 flex space-x-1 rounded-lg bg-white/5 p-1">
        <button @click="activeTab = 'all'"
            :class="activeTab === 'all' ? 'bg-white/10 text-white' : 'text-white/60 hover:text-white/80'"
            class="flex-1 rounded-md px-4 py-2 text-sm font-medium transition-all duration-200">
            All
        </button>
        <button @click="activeTab = 'podcasts'"
            :class="activeTab === 'podcasts' ? 'bg-white/10 text-white' : 'text-white/60 hover:text-white/80'"
            class="flex-1 rounded-md px-4 py-2 text-sm font-medium transition-all duration-200">
            Podcasts
        </button>
        <button @click="activeTab = 'speaking'"
            :class="activeTab === 'speaking' ? 'bg-white/10 text-white' : 'text-white/60 hover:text-white/80'"
            class="flex-1 rounded-md px-4 py-2 text-sm font-medium transition-all duration-200">
            Speaking
        </button>
    </div>

    <!-- All Content -->
    <div x-show="activeTab === 'all'" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($all as $item)
                @include('components.speaking-listing-card', ['item' => $item])
            @endforeach
        </div>
    </div>

    <!-- Podcasts Only -->
    <div x-show="activeTab === 'podcasts'" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($podcasts as $item)
                @include('components.speaking-listing-card', ['item' => $item])
            @endforeach
        </div>
    </div>

    <!-- Speaking Only -->
    <div x-show="activeTab === 'speaking'" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($speaking as $item)
                @include('components.speaking-listing-card', ['item' => $item])
            @endforeach
        </div>
    </div>
</div>
