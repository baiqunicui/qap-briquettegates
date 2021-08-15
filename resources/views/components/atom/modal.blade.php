{{-- --------------------------------------------- --}}
@props(['id' => null])

@php
    $id = $id ?? md5($attributes->wire('model'));
@endphp
{{-- --------------------------------------------- --}}

<div
    x-data="{
        show: @entangle($attributes->wire('model')),
        focusables() {
            // All focusable element types...
            let selector = 'a, button, input, textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

            return [...$el.querySelectorAll(selector)]
                // All non-disabled elements...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
        autofocus() { let focusable = $el.querySelector('[autofocus]'); if (focusable) focusable.focus() },
    }"
    x-init="$watch('show', value => value && setTimeout(autofocus, 50))"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    id="{{ $id }}"
    class="fixed top-0 inset-x-0 z-50 flex items-center justify-center"
    style="display: none;">
    <div x-show="show" x-on:click="show = false" class="fixed inset-0 transform transition-all flex items-center">
        <div class="absolute inset-0 bg-secondary-50 opacity-[90%]"></div>
    </div>

    <div x-show="show" class="overflow-hidden transform transition-all w-full min-h-screen flex">
        <div {{ $attributes->merge(['class' => 'max-w-5xl bg-white mx-auto my-auto px-10 py-8 space-y-12 w-1/2'])->only('class') }}>
            {{$slot}}
        </div>
    </div>
</div>
