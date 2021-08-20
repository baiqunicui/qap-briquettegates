<x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}">
    <x-orga.section
        class="flex flex-col-reverse items-center justify-center my-auto space-y-10 space-y-reverse sm:justify-between sm:flex-row sm:space-y-0">
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

        <div class="w-[80%] sm:w-[60%] md:w-[40%]">
            <x-atom.img-square src="{{$item->image->first()['url'] ?? ''}}" imgClass="rounded-full" />
        </div>
    </x-orga.section>

    <x-orga.section class="flex justify-end">
        <div class="p-4 sm:py-6 sm:px-10 bg-[#F34F1F] w-full sm:w-[60%] md:w-[40%]">
            @foreach ($item->meta ?? [] as $meta)
            <a href="{{ $meta[lang()][0]['link'] ?? '' }}">
                <h6 class="text-white">{{ $meta[lang()][0]['heading'] ?? '' }}</h6>
            </a>
            @endforeach
        </div>
    </x-orga.section>
</x-orga.sectionFull>
