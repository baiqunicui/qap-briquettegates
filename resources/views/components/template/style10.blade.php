<x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}">
    <x-orga.section
        class="flex flex-col-reverse my-auto space-y-10 space-y-reverse sm:items-center sm:justify-between sm:flex-row sm:space-y-0">
        <x-mole.text-2 class="text-center sm:text-left">
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

        <div>
            <x-atom.img src="{{$item->image->first()['url'] ?? ''}}"></x-atom.img>
        </div>
    </x-orga.section>

    <x-orga.section class="pb-12">
        <div class="flex items-center justify-between w-full">
            @foreach ($item->meta ?? [] as $meta)
            <ul class="hidden lg:flex">
                <a href="{{ $meta[lang()][0]['link'] ?? '' }}">
                    <label>{{ $meta[lang()][0]['heading'] ?? '' }}</label>
                    <small>{{ $meta[lang()][0]['subheading'] ?? '' }}</small>
                </a>
            </ul>
            @endforeach

            <div class="flex items-center justify-between w-full sm:w-auto sm:space-x-8">
                <label>{!!'Share'!!}</label>
                <x-atom.svg-line class="w-16 sm:w-32"></x-atom.svg-line>
                <button id="btn" data-clipboard-text="{{ url()->current() . '?lang=' . lang() }}"
                    class="transform hover:scale-110 motion-reduce:transform-none">
                    <x-atom.img src="/assets/share.svg"></x-atom.img>
                </button>
            </div>
        </div>
    </x-orga.section>
</x-orga.sectionFull>
