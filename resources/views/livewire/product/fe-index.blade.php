<div class="main">
    @foreach ($collection as $item)
    @if ($item->style_id === 1)

    <x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}">
        <x-orga.section class="my-32 sm:my-auto">
            <x-mole.text-1>
                <x-slot name="subheading">
                    {!! $item->subheading[0][lang()] ?? '' !!}
                </x-slot>

                <x-slot name="heading">
                    {!! $item->heading[0][lang()] ?? '' !!}
                </x-slot>

                <x-slot name="desc">
                    {!! $item->desc[0][lang()] ?? '' !!}
                </x-slot>
            </x-mole.text-1>
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

    @elseif ($item->style_id === 2)

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

    @elseif ($item->style_id === 3)

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

            <x-atom.img src="/assets/images/a1.jpg" class="h-[50vh] w-full"></x-atom.img>
        </x-orga.section>
    </x-orga.sectionFull>

    @elseif ($item->style_id === 4)

    <x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}">
        <x-orga.section class="my-auto">
            <x-mole.text-2 class="lg:w-8/12">
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
    </x-orga.sectionFull>

    @elseif ($item->style_id === 5)

    <x-orga.sectionFull id="{{ $item->urutan }}" x-data="{ tab: '0' }" style="background-color: {{ $item->color }}">
        <x-orga.section class="pt-12 my-0 sm:pt-0 sm:my-auto">
            <ul class="w-full space-y-4 sm:w-2/3 lg:w-1/2 sm:space-y-2">
                <h4>{!! $item->subheading[0][lang()] ?? '' !!}</h4>

                @foreach ($item->meta ?? [] as $key => $meta)
                <ul x-show="tab === '{{$key}}'" class="space-y-4 sm:space-y-8">
                    <h2>{{ $meta[lang()][0]['heading'] ?? '' }}</h2>
                    <p>{{ $meta[lang()][0]['desc'] ?? '' }}</p>
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

    @elseif ($item->style_id === 6)

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
                    <h6>{{ 0 . $key + 1 }}</h6>
                    <p class="text-gray-400">{{ $meta[lang()][0]['desc'] ?? '' }}</p>
                </ul>
                @endforeach
            </div>
        </x-orga.section>
    </x-orga.sectionFull>

    @elseif ($item->style_id === 7)

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

    @elseif ($item->style_id === 8)

    <x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}">
        <x-orga.section class="flex flex-col mt-24 sm:mt-auto">
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

        <x-orga.section>
            <div class="block w-full">
                <form action="submit" class="pb-20 space-y-3 sm:space-y-6">
                    <div class="space-y-3 sm:space-y-0 sm:space-x-6 sm:flex">
                        <x-mole.input.text placeholder="name" label="name" model="" />
                        <x-mole.input.text placeholder="email" label="name" model="" />
                        <x-mole.input.text placeholder="phone" label="name" model="" />
                    </div>

                    <x-mole.input.text placeholder="name" label="name" model="" />
                    <x-mole.input.textarea placeholder="name" label="name" model="" />
                </form>

                <div class="p-4 sm:py-6 sm:px-10 bg-gray-800 w-full sm:w-[40%]">
                    <h6 class="text-white">{{'Submit'}}</h6>
                </div>
            </div>
        </x-orga.section>
    </x-orga.sectionFull>

    @elseif ($item->style_id === 9)

    <x-orga.sectionFull id="{{ $item->urutan }}" style="background-color: {{ $item->color }}">
        <x-orga.section class="my-auto">
            <x-mole.text-2 class="">
                <x-slot name="subheading">{!! 'Our Address' !!}</x-slot>
                <x-slot name="heading">{!! 'Jalan Mayapada 30A,
                    Jakarta Timur,
                    Indonesia 12212' !!}</x-slot>
            </x-mole.text-2>
        </x-orga.section>

        <x-orga.section class="pb-12">
            <div class="flex flex-wrap">
                @foreach ($item->meta ?? [] as $key => $meta)
                <a href="{{ $meta[lang()][0]['link'] ?? '' }}" target="_blank">
                    <div class="flex items-center pb-3 pr-3 space-x-4 sm:pr-16">
                        <div class="flex items-center justify-center p-2 bg-green-400 sm:p-4 item-center">
                            <x-atom.svg-facebook></x-atom.svg-facebook>
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

    @elseif ($item->style_id === 10)

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
                <ul>
                    <a href="{{ $meta[lang()][0]['link'] ?? '' }}">
                        <label>{{ $meta[lang()][0]['heading'] ?? '' }}</label>
                        <small>{{ $meta[lang()][0]['subheading'] ?? '' }}</small>
                    </a>
                </ul>
                @endforeach

                <div class="flex items-center justify-between w-full sm:w-auto sm:space-x-8">
                    <label>{!!'Share'!!}</label>
                    <x-atom.svg-line class="w-16 sm:w-32"></x-atom.svg-line>
                    <x-atom.img src="/assets/share.svg"></x-atom.img>
                </div>
            </div>
        </x-orga.section>
    </x-orga.sectionFull>

    @elseif ($item->style_id === 11)

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

    @elseif ($item->style_id === 12)

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
                <ul>
                    <a href="{{ $meta[lang()][0]['link'] ?? '' }}">
                        <label>{{ $meta[lang()][0]['heading'] ?? '' }}</label>
                        <small>{{ $meta[lang()][0]['subheading'] ?? '' }}</small>
                    </a>
                </ul>
                @endforeach

                <div class="flex items-center justify-between w-full sm:w-auto sm:space-x-8">
                    <label>{!!'Share'!!}</label>
                    <x-atom.svg-line class="w-16 sm:w-32"></x-atom.svg-line>
                    <x-atom.img src="/assets/share.svg"></x-atom.img>
                </div>
            </div>
        </x-orga.section>
    </x-orga.sectionFull>

    <x-orga.sectionFull>
        <x-orga.section class="my-auto">
            <x-mole.text-2 class="space-y-12 lg:w-2/3">
                <x-slot name="subheading">
                    <b>{!! $item->s_2_subheading[0][lang()] ?? '' !!}</b>
                </x-slot>

                <x-slot name="heading">
                    {!! $item->s_2_heading[0][lang()] ?? '' !!}
                </x-slot>

                <x-slot name="desc">
                    {!! $item->s_2_desc[0][lang()] ?? '' !!}
                </x-slot>

                <div class="flex flex-wrap">
                    @foreach ($item->s_2_meta ?? [] as $meta)
                    <ul class="w-1/2 pb-6 pr-6 sm:w-1/3 md:pb-10 md:pr-16">
                        <label>{{ $meta[lang()][0]['heading'] ?? '' }}</label>
                        <small>{{ $meta[lang()][0]['subheading'] ?? '' }}</small>
                    </ul>
                    @endforeach
                </div>
            </x-mole.text-2>
        </x-orga.section>
    </x-orga.sectionFull>

    @endif
    @endforeach
</div>
