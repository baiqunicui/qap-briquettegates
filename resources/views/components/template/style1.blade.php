<x-orga.sectionFull class="justify-between bg-gray-100">
    <x-orga.section class="my-32 sm:my-auto">
        <x-mole.text-1>
            <x-slot name="subheading">{!! 'Welcome<b>to</b>' !!}</x-slot>
            <x-slot name="heading">{!! 'Briquette<br>gates' !!}</x-slot>
            <x-slot name="desc">{!! 'INDONESIA' !!}</x-slot>
        </x-mole.text-1>
    </x-orga.section>

    <x-orga.section class="pb-12">
        <div class="flex flex-wrap">
            <ul class>
                <label>{!!'More About us'!!}</label>
                <small>{!!'Briquette gates'!!}</small>
            </ul>
        </div>
    </x-orga.section>

    <div class="absolute right-0 bottom-32 sm:bottom-0 sm:my-auto">
        <x-atom.img src="/assets/images/b1.png" class="w-[80%] md:w-[100%] ml-auto"></x-atom.img>
    </div>
</x-orga.sectionFull>
