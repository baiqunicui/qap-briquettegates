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
    class="fixed flex inset-0 z-50 bg-primary-50 bg-opacity-75"
    style="display: none;">

    <div x-show="show" class="flex self-center items-center justify-center w-full h-full p-8 max-h-[90vh] transform transition-all">
        <div {{ $attributes->merge(['class' => 'flex flex-col bg-white px-10 py-8 space-y-12 w-full max-h-full max-w-[90vw] relative overflow-y-auto '])->only('class') }}>
            <div class="">
                {{ $top }}
            </div>
    
            <div class="space-y-4">
                {{ $middle }}
            </div>
    
            <div class="flex space-x-4">
                {{ $bottom }}
            </div>
        </div>
    </div>
</div>