<div class="main">
    <x-orga.sectionFull class="bg-gray-100">
        <x-orga.section
            class="flex flex-col-reverse my-auto space-y-10 space-y-reverse sm:items-center sm:justify-between sm:flex-row sm:space-y-0">
            <x-mole.text-2 class="text-center sm:text-left">
                <x-slot name="subheading">{!! 'Learn more about' !!}</x-slot>
                <x-slot name="heading">{!! 'Our Products' !!}</x-slot>
                <x-slot name="desc">{!! 'Less ash, odorless, not shiny, long burning time.<br>Raw material 100% coconut
                    from Indonesia.' !!}</x-slot>
            </x-mole.text-2>

            <div>
                <x-atom.img src="/assets/images/p0.png"></x-atom.img>
            </div>
        </x-orga.section>

        <x-orga.section class="pb-12">
            <div class="flex items-center justify-between w-full">
                <ul class="hidden sm:block">
                    <label>{!!'Strategy Key to Success'!!}</label>
                    <small>{!!'Click to learn more'!!}</small>
                </ul>

                <div class="flex items-center justify-between w-full sm:w-auto sm:space-x-8">
                    <label>{!!'Share'!!}</label>
                    <x-atom.svg-line class="w-16 sm:w-32"></x-atom.svg-line>
                    <x-atom.img src="/assets/share.svg"></x-atom.img>
                </div>
            </div>
        </x-orga.section>
    </x-orga.sectionFull>

    <x-orga.sectionFull>
        <x-orga.section class="my-auto">
            <x-mole.text-2 class="lg:w-2/3">
                <x-slot name="subheading"><b>{!! 'Specification' !!}</b></x-slot>
                <x-slot name="desc">{!! 'Our coconut shell briquettes are available in various sizes and shapes. The
                    most
                    popular one we export is HEXAGONAL 2.2
                    cm x 5.0 cm CUBE 2.6 cm x 2.6 cm x 2.6 cm CUBE 2.50 cm x 2.50 cm x 2.50 cm.' !!}</x-slot>
                <div class="flex flex-wrap">
                    @foreach ([1,2,3,4,5,6,7] as $item)
                    <ul class="pb-6 pr-6 md:pb-10 md:pr-16">
                        <label>{!!'Strategy Key to Success'!!}</label>
                        <small>{!!'Click to learn more'!!}</small>
                    </ul>
                    @endforeach
                </div>
            </x-mole.text-2>
        </x-orga.section>
    </x-orga.sectionFull>
</div>
