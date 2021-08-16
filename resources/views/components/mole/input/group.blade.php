@props(['label', 'name' => '',])

<div class="w-full">
    @isset($label)
    <div class="flex ml-2">
        <span class="bg-gray-100 z-50 px-1 text-[9px] font-medium capitalize">
            {{ $label}}
        </span>
    </div>
    @endisset

    {{ $slot }}

    @error($name)
    <small class="font-medium capitalize text-secondary">
        {{ $message ?? '' }}
    </small>
    @enderror
</div>
