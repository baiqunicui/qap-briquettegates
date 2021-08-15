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
    class="fixed flex inset-0 z-50 bg-primary-100 bg-opacity-[90%]"
    style="display: none;">

    <div x-show="show" class="flex self-center items-center justify-center w-full h-full p-8 max-h-[80vh] transform transition-all">
        <div {{ $attributes->merge(['class' => 'flex flex-col bg-white px-24 py-16 w-full max-h-full max-w-[80vw] relative overflow-y-auto space-y-3'])->only('class') }}>
            <div class="flex justify-between">
                {{ $left }}
            </div>

            <div class="flex justify-between space-x-7">
                {{ $right }}
            </div>
        </div>
    </div>
</div>