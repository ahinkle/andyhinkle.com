<aside
    class="fixed z-50 flex text-xs divide-x divide-white shadow-sm bottom-10 right-1 divide-solid motion-safe:transition-opacity hover:opacity-100"
    x-data="{ toolbarVisible: true }"
    x-ref="toolbar"
    x-cloak
    x-show="toolbarVisible"
>
    <span title="Current Tailwind Breakpoint" class="flex items-center p-2 space-x-1 text-yellow-800 bg-yellow-200">
        <div class="w-4 h-4 fill-current">
            <svg viewBox="0 0 496.8 496.8"><path d="M118 377.8l-64-64c-6.4-6.4-16-6.4-22.4 0-6.4 6.4-6.4 16 0 22.4l64 64c3.2 3.2 6.4 4.8 11.2 4.8s8-1.6 11.2-4.8c6.4-6.4 6.4-16 0-22.4z"/><path d="M486 107.4l-96-96a39.7 39.7 0 00-54.4 0L10.8 334.6a39.6 39.6 0 000 54.4l96 96c8 8 17.6 11.2 27.2 11.2 9.6 0 19.2-3.2 25.6-11.2L486 161.8c14.4-16 14.4-40 0-54.4zm-24 30.4L137.2 462.6c-3.2 3.2-4.8 3.2-8 0l-96-96c-1.6-1.6-1.6-6.4 0-8L356.4 33.8c1.6-1.6 3.2-1.6 4.8-1.6 1.6 0 3.2 0 4.8 1.6l96 96c1.6 1.6 1.6 6.4 0 8z"/><path d="M258.8 237l-64-64c-6.4-6.4-16-6.4-22.4 0-6.4 6.4-6.4 16 0 22.4l64 64c3.2 3.2 6.4 4.8 11.2 4.8s8-1.6 11.2-4.8c6.4-6.4 6.4-16 0-22.4zm-72 22.4l-40-38.4c-6.4-6.4-16-6.4-22.4 0-6.4 6.4-6.4 16 0 22.4l40 38.4c3.2 3.2 6.4 4.8 11.2 4.8s9.6-1.6 11.2-4.8c6.4-6.4 6.4-16 0-22.4zm-46.4 46.4L102 267.4c-6.4-6.4-16-6.4-22.4 0-6.4 6.4-6.4 16 0 22.4l38.4 38.4c3.2 3.2 6.4 4.8 11.2 4.8 4.8 0 8-1.6 11.2-4.8 6.4-6.4 6.4-16 0-22.4zm187.2-187.2l-38.4-38.4c-6.4-6.4-16-6.4-22.4 0-6.4 6.4-6.4 16 0 22.4l38.4 38.4c3.2 3.2 6.4 4.8 11.2 4.8 4.8 0 9.6-1.6 11.2-4.8 6.4-6.4 6.4-16 0-22.4zM281.2 165l-38.4-38.4c-6.4-6.4-16-6.4-22.4 0-6.4 6.4-6.4 16 0 22.4l38.4 38.4c3.2 3.2 6.4 4.8 11.2 4.8s8-1.6 11.2-4.8c6.4-6.4 6.4-16 0-22.4zm118.4-68.8l-64-64c-6.4-6.4-16-6.4-22.4 0-6.4 6.4-6.4 16 0 22.4l64 64c3.2 3.2 6.4 4.8 11.2 4.8 4.8 0 8-1.6 11.2-4.8 6.4-6.4 6.4-16 0-22.4z"/></svg>
        </div>
        <span class="block sm:hidden">(none)</span>
        <span class="hidden sm:block md:hidden">SM</span>
        <span class="hidden md:block lg:hidden">MD</span>
        <span class="hidden lg:block xl:hidden">LG</span>
        <span class="hidden xl:block 2xl:hidden">XL</span>
        <span class="hidden 2xl:block">2XL</span>
    </span>

    <button
        x-on:click="toolbarVisible = !toolbarVisible"
        title="Remove toolbar" aria-label="Remove toolbar" class="flex items-center justify-center px-2 space-x-1 bg-gray-200 hover:bg-gray-300"
    >
        <div class="w-4 h-4 text-yellow-800 stroke-current">
            <svg viewBox="0 0 140 140"><g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M100.625 122.5h-61.25a8.75 8.75 0 01-8.75-8.75V35h78.75v78.75a8.75 8.75 0 01-8.75 8.75zM56.875 96.25v-35M83.125 96.25v-35M13.125 35h113.75M83.125 17.5h-26.25a8.75 8.75 0 00-8.75 8.75V35h43.75v-8.75a8.75 8.75 0 00-8.75-8.75z" stroke-width="8.749995"/></g></svg>
        </div>
    </button>
</aside>
