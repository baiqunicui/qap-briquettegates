<x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}" class="justify-end">
    <x-orga.section class="block space-y-12">
        <x-mole.text-3>
            <x-slot name="heading">
                {!! $item->heading[0][lang()] ?? '' !!}
            </x-slot>

            <x-slot name="desc">
                {!! $item->desc[0][lang()] ?? '' !!}
            </x-slot>
        </x-mole.text-3>

        <x-atom.img src="{{$item->image->first()['url'] ?? ''}}" class="h-[50vh] w-full"></x-atom.img>
    </x-orga.section>
</x-orga.sectionFull>
