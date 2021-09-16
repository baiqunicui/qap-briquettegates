<x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}" class="justify-center">
    <x-orga.section class="pt-20 lg:pt-12">
        <x-mole.text-2>
            <x-slot name="heading">
                {!! $item->heading[0][lang()] ?? '' !!}
            </x-slot>

            <x-slot name="desc">
                {!! $item->desc[0][lang()] ?? '' !!}
            </x-slot>
        </x-mole.text-2>
    </x-orga.section>

    <x-orga.section>
        <div class="grid w-full grid-cols-1 gap-16 md:grid-cols-3">
            @foreach ($item->meta ?? [] as $meta)
            <div class="col-span-1">
                @foreach ($upload->where('id', $meta['foto']) ?? [] as $foto)
                <x-atom.img src="{{ $foto->image->first()['url'] ?? '' }} " class="w-full h-[30vh] md:h-[45vh]">
                </x-atom.img>
                @endforeach

                <div class="pt-4">
                    <h6>{{$meta['nama'] ?? ''}}</h6>
                    <p>{{$meta['jabatan'] ?? ''}}</p>

                    <div class="flex mt-4 space-x-2">
                        <a href="{{$meta['linkedin'] ?? ''}}">
                            <x-atom.img src="/assets/socmed/linkedin.svg" class="w-auto h-6"></x-atom.img>
                        </a>

                        <a href="{{$meta['instagram'] ?? ''}}">
                            <x-atom.img src="/assets/socmed/instagram.svg" class="w-auto h-6 invert"></x-atom.img>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </x-orga.section>

</x-orga.sectionFull>
