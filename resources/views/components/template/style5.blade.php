<x-orga.sectionFull id="{{ $item->urutan }}" x-data="{ tab: '0' }" style="background-color: {{ $item->color }}">
    <x-orga.section class="pt-12 my-0 sm:pt-0 sm:my-auto">
        <ul class="w-full space-y-4 sm:w-2/3 lg:w-1/2 sm:space-y-2">
            <h4>{!! $item->subheading[0][lang()] ?? '' !!}</h4>

            @foreach ($item->meta ?? [] as $key => $meta)
            <ul x-show="tab === '{{$key}}'" class="space-y-4 sm:space-y-8">
                <h2>{{ $meta[lang()][0]['heading'] ?? '' }}</h2>
                <p>{!! $meta[lang()][0]['desc'] ?? '' !!}</p>
            </ul>
            @endforeach
        </ul>
    </x-orga.section>

    <x-orga.section class="pb-12">
        <div class="flex flex-wrap">
            @foreach ($item->meta ?? [] as $key => $meta)
            <ul class="mb-2 mr-12">
                <a :class="{ 'text-gray-400': tab === '{{$key}}' }" x-on:click="tab = '{{$key}}'">
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
