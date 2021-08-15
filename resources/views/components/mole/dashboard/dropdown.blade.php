<div {{ $attributes->merge(['class' => 'relative inline-block text-left z-10'])->except(['x-show', '@click']) }}>
    <x-atom.button iconDown colorSecondary
        id="options-menu" aria-haspopup="true" x-bind:aria-expanded="open" aria-expanded="true" {{ $attributes->only('@click') }}>
        Action
    </x-atom.button>

    <x-atom.dropdown-item {{ $attributes->only('x-show') }}>
        {{$slot}}
    </x-atom.dropdown-item>
</div>
