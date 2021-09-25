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

        <iframe class="h-[60vh] w-full" id="gmap_canvas" src="{!! $item->subheading[0][lang()] ?? '' !!}"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </x-orga.section>
</x-orga.sectionFull>
