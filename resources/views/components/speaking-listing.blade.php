<div x-data="{ activeTab: 'all' }">
    <div class="mb-10 flex gap-1">
        <button @click="activeTab = 'all'"
            :class="activeTab === 'all' ? 'bg-white/10 text-white' : 'text-gray-500 hover:text-white'"
            class="rounded-full px-4 py-2 text-sm font-medium transition-colors">
            All
        </button>
        <button @click="activeTab = 'podcasts'"
            :class="activeTab === 'podcasts' ? 'bg-white/10 text-white' : 'text-gray-500 hover:text-white'"
            class="rounded-full px-4 py-2 text-sm font-medium transition-colors">
            Podcasts
        </button>
        <button @click="activeTab = 'speaking'"
            :class="activeTab === 'speaking' ? 'bg-white/10 text-white' : 'text-gray-500 hover:text-white'"
            class="rounded-full px-4 py-2 text-sm font-medium transition-colors">
            Speaking
        </button>
    </div>

    <div x-show="activeTab === 'all'" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
        <div class="grid gap-6 sm:grid-cols-2">
            @foreach ($all as $item)
                @include('components.speaking-listing-card', ['item' => $item])
            @endforeach
        </div>
    </div>

    <div x-show="activeTab === 'podcasts'" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
        <div class="grid gap-6 sm:grid-cols-2">
            @foreach ($podcasts as $item)
                @include('components.speaking-listing-card', ['item' => $item])
            @endforeach
        </div>
    </div>

    <div x-show="activeTab === 'speaking'" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
        <div class="grid gap-6 sm:grid-cols-2">
            @foreach ($speaking as $item)
                @include('components.speaking-listing-card', ['item' => $item])
            @endforeach
        </div>
    </div>
</div>
