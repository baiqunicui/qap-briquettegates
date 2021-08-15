<button {{ $attributes->merge([
        'class' => ' inline-flex justify-between items-center rounded-full space-x-5 px-4 py-2 md:px-5 focus:outline-none transition duration-150 ease-in-out '
            . ($attributes->get('disabled')         ? 'opacity-75 cursor-not-allowed' : '')
            . ($attributes->get('colorSecondary')   ? 'text-secondary bg-white hover:bg-opacity-90' : '')
            . ($attributes->get('colorPrimary')     ? '!text-white bg-secondary hover:bg-secondary/80' : '')
            . ($attributes->get('outlineSecondary') ? 'border-white border text-white dark:text-white hover:bg-white hover:text-black' : '')
            . ($attributes->get('outlinePrimary')   ? 'text-primary border border-primary-50 hover:border-primary' : '')
    ])->only('class') }} {{ $attributes->except(['class', 'href']) }}>

    @isset($iconLeft)
    <x-atom.svg-left />
    @endisset

    <small>
        {{$slot}}
    </small>

    @isset($iconPlus)
    <x-atom.svg-plus />
    @endisset

    @isset($iconDown)
    <x-atom.svg-down />
    @endisset

    @isset($iconUp)
    <x-atom.svg-up />
    @endisset

    @isset($iconRight)
    <x-atom.svg-right />
    @endisset

</button>
