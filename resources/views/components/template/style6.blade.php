<x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}" class="!min-h-full my-16">
    <x-orga.section class="my-auto">

        <x-mole.text-2 class="!w-full">
            <x-slot name="subheading">
                {!! $item->subheading[0][lang()] ?? '' !!}
            </x-slot>

            <x-slot name="heading">
                {!! $item->heading[0][lang()] ?? '' !!}
            </x-slot>

            <p class="gap-16 col-count-1 sm:col-count-2">
                {!! $item->desc[0][lang()] ?? '' !!}
            </p>
        </x-mole.text-2>
    </x-orga.section>

    <x-orga.section class="pt-24 my-auto">
        <div class="grid grid-cols-1 gap-10 sm:gap-y-12 sm:gap-x-16 sm:grid-cols-2">
            @foreach ($item->meta ?? [] as $key => $meta)
            <ul>
                <h6>{{ '0' . ($key + 1) }}</h6>
                <p class="text-gray-400">{{ $meta[lang()][0]['desc'] ?? '' }}</p>
            </ul>
            @endforeach
        </div>
    </x-orga.section>
</x-orga.sectionFull>
