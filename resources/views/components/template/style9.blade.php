<x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}">
    <x-orga.section class="my-auto">
        <x-mole.text-4>
            <x-slot name="subheading">
                {!! $item->subheading[0][lang()] ?? '' !!}
            </x-slot>

            <x-slot name="heading">
                {!! $item->heading[0][lang()] ?? '' !!}
            </x-slot>
        </x-mole.text-4>
    </x-orga.section>

    <x-orga.section class="flex-col pb-12 space-y-4 md:space-y-6">
        <h6 class="text-gray-400">{!! $item->desc[0][lang()] ?? '' !!}</h6>

        <div class="flex flex-wrap">
            @foreach ($item->meta ?? [] as $key => $meta)
            <a href="{{ $meta[lang()][0]['link'] ?? '' }}" target="_blank">
                <div class="flex items-center pb-3 pr-3 space-x-4 sm:pr-16">
                    <div class="flex items-center justify-center p-2 sm:p-4 item-center"
                        style="background-color: {{$meta['color'] ?? '#f5f5f5'}}">
                        @foreach ($upload->where('id', $meta['icon']) ?? [] as $item)
                        <x-atom.img src="{{ $item->image->first()['url'] ?? '' }} " class="w-auto h-4"></x-atom.img>
                        @endforeach
                    </div>

                    <ul>
                        <label>{{ $meta[lang()][0]['subheading'] ?? '' }}</label>
                        <small>{{ $meta[lang()][0]['heading'] ?? '' }}</small>
                    </ul>
                </div>
            </a>
            @endforeach
        </div>
    </x-orga.section>
</x-orga.sectionFull>
