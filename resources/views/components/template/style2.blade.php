<x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}">
    <x-orga.section class="pt-12 my-0 sm:pt-0 sm:my-auto">
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

    <x-orga.section class="pb-12">
        <div class="flex flex-wrap">
            @foreach ($item->meta ?? [] as $meta)
            <ul>
                <a href="{{ $meta[lang()][0]['link'] ?? '' }}">
                    <label>{{ $meta[lang()][0]['heading'] ?? '' }}</label>
                    <small>{{ $meta[lang()][0]['subheading'] ?? '' }}</small>
                </a>
            </ul>
            @endforeach
        </div>
    </x-orga.section>


    @isset($item->image)
    <div class="absolute right-0 bottom-32 sm:bottom-0 sm:my-auto">
        <x-atom.img src="{{$item->image->first()['url'] ?? ''}}" class="w-[80%] lg:w-[100%] ml-auto">
        </x-atom.img>
    </div>
    @endisset
</x-orga.sectionFull>
