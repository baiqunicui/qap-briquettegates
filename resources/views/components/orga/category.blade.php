<section {{ $attributes->merge(['class' => 'sticky top-0 h-screen bg-white border-r-2 border-primary px-10 py-6 flex flex-col']) }}>
    <x-mole.menu-logo>
        {{$top}}
    </x-mole.menu-logo>

    <x-mole.menu-content>
        {{$mid}}
    </x-mole.menu-content>

    <x-mole.menu-content class="space-y-2">
        {{$bottom}}
    </x-mole.menu-content>
</section>
