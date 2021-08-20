<x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}">
    <x-orga.section class="flex flex-col mt-24 sm:mt-auto">
        <x-mole.text-2>
            <x-slot name="subheading">
                {!! $item->subheading[0][lang()] ?? '' !!}
            </x-slot>

            <x-slot name="heading">
                {!! $item->heading[0][lang()] ?? '' !!}
            </x-slot>

            <x-slot name="desc">
                {!! $item->desc[0][lang()] ?? '' !!}
            </x-slot>
        </x-mole.text-2>
    </x-orga.section>

    <x-orga.section>
        <livewire:contact-form-list.fe-index>
    </x-orga.section>
</x-orga.sectionFull>
