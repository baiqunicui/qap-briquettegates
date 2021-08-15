<div
    style="display: none;"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="transform opacity-0 scale-95"
    x-transition:enter-end="transform opacity-100 scale-200"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95"
    {{ $attributes->merge(['class' => 'origin-top-right absolute right-0 mt-2 min-w-full']) }}
    >
    <div class="bg-white shadow-lg px-4 py-4">
        <ul class="space-y-4" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            {{ $slot }}
        </ul>
    </div>
</div>