<div class="main">
    <x-orga.sectionFull class="justify-end bg-gray-100">
        <x-orga.section class="block space-y-12">
            <x-mole.text-3>
                <x-slot name="heading">{!! 'Let’s<br>contact us' !!}</x-slot>
                <x-slot name="desc">{!! 'Especially wood charcoal briquettes and coconut shells. We are experts in the
                    field.' !!}</x-slot>
            </x-mole.text-3>

            <x-atom.img src="/assets/images/c1.jpg" class="h-[50vh] w-full"></x-atom.img>
        </x-orga.section>
    </x-orga.sectionFull>

    <x-orga.sectionFull>
        <x-orga.section class="flex flex-col my-auto">
            <x-mole.text-2>
                <x-slot name="subheading">{!! 'Fill the form<br>to contact us' !!}</x-slot>
            </x-mole.text-2>

            <form action="" class="space-y-3 sm:space-y-6">
                <div class="space-y-3 sm:space-x-6 sm:flex">
                    <x-mole.input.text placeholder="name" label="name" model="" />
                    <x-mole.input.text placeholder="name" label="name" model="" />
                    <x-mole.input.text placeholder="name" label="name" model="" />
                </div>

                <x-mole.input.text placeholder="name" label="name" model="" />
                <x-mole.input.textarea placeholder="name" label="name" model="" />
            </form>
        </x-orga.section>

        <x-orga.section>
            <div class="p-4 sm:py-6 sm:px-10 bg-gray-800 w-[80%] sm:w-[40%]">
                <h6 class="text-white">{{'Submit'}}</h6>
            </div>
        </x-orga.section>
    </x-orga.sectionFull>

    <x-orga.sectionFull class="bg-gray-100">
        <x-orga.section class="my-auto">
            <x-mole.text-2 class="">
                <x-slot name="subheading">{!! 'Our Address' !!}</x-slot>
                <x-slot name="heading">{!! 'Jalan Mayapada 30A,
                    Jakarta Timur,
                    Indonesia 12212' !!}</x-slot>
            </x-mole.text-2>
        </x-orga.section>

        <x-orga.section>
            <div class="flex flex-wrap pb-12">
                @foreach ([1,2,3,4] as $item)
                <div class="flex items-center pb-3 pr-3 space-x-4 sm:pr-10">
                    <div class="flex items-center justify-center p-2 bg-green-400 sm:p-4 item-center">
                        <x-atom.svg-facebook></x-atom.svg-facebook>
                    </div>

                    <ul>
                        <label>{!!'Strategy Key to Success'!!}</label>
                        <small>{!!'Click to learn more'!!}</small>
                    </ul>
                </div>
                @endforeach
            </div>
        </x-orga.section>
    </x-orga.sectionFull>
</div>
