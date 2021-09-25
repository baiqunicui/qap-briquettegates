<x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}"
    class="justify-center md:py-32">
    <x-orga.section class="w-full pt-20 lg:pt-12">
        <x-mole.text-2 class="mx-auto text-center">
            <x-slot name="heading">
                {!! $item->heading[0][lang()] ?? '' !!}
            </x-slot>

            <x-slot name="desc">
                {!! $item->desc[0][lang()] ?? '' !!}
            </x-slot>
        </x-mole.text-2>
    </x-orga.section>

    <x-orga.section>
        <div class="grid w-full grid-cols-1 gap-8 mx-auto md:w-8/12 md:gap-12 md:grid-cols-2">
            @foreach ($item->meta ?? [] as $meta)
            <div class="col-span-1">
                @foreach ($upload->where('id', $meta['foto']) ?? [] as $foto)
                <x-atom.img-square src="{{ $foto->image->first()['url'] ?? '' }} " class="">
                </x-atom.img-square>
                @endforeach

                <div class="pt-4 space-y-3">
                    <ul class="space-y-2">
                        <h5 class="font-bold leading-none">{{$meta['nama'] ?? ''}}</h5>
                        <p class="font-semibold leading-none text-gray-400">{{$meta['jabatan'] ?? ''}}</p>
                        <p>{{$meta['desc'] ?? ''}}</p>
                    </ul>

                    <div class="flex mt-4 space-x-2">
                        <a href="{{$meta['linkedin'] ?? ''}}">
                            <x-atom.img src="/assets/socmed/linkedin.svg" class="w-auto h-5"></x-atom.img>
                        </a>

                        <a href="{{$meta['instagram'] ?? ''}}">
                            <x-atom.img src="/assets/socmed/instagram.svg" class="w-auto h-5 invert"></x-atom.img>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </x-orga.section>

</x-orga.sectionFull>
