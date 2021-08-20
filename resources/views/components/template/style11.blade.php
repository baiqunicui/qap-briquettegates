<x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}">
    <x-orga.section class="my-auto">
        <x-mole.text-2 class="space-y-12 lg:w-2/3">
            <x-slot name="subheading">
                <b>{!! $item->subheading[0][lang()] ?? '' !!}</b>
            </x-slot>

            <x-slot name="heading">
                {!! $item->heading[0][lang()] ?? '' !!}
            </x-slot>

            <x-slot name="desc">
                {!! $item->desc[0][lang()] ?? '' !!}
            </x-slot>

            <div class="flex flex-wrap">
                @foreach ($item->meta ?? [] as $meta)
                <ul class="w-1/2 pb-6 pr-6 sm:w-1/3 md:pb-10 md:pr-16">
                    <label>{{ $meta[lang()][0]['heading'] ?? '' }}</label>
                    <small>{{ $meta[lang()][0]['subheading'] ?? '' }}</small>
                </ul>
                @endforeach
            </div>
        </x-mole.text-2>
    </x-orga.section>
</x-orga.sectionFull>
