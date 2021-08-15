<div class="main">
    <section>
        <h3> {!! $serviceList->section_1_content[0]['title'] ?? '' !!}</h3>

        <div class="divide-y divide-opacity-20">
            @foreach ($serviceList->section_2_content ?? [] as $item)
            <div x-data="{ open: false }">
                <x-atom.a x-on:click="open = true" class="flex items-center justify-between w-full py-9">
                    <div class="col-span-6">{{$item['heading']}}</div>
                    <div :class="{ '-rotate-90': open === true }" class="col-span-3 mx-auto rotate-90">
                        <x-atom.svg-up />
                    </div>
                </x-atom.a>

                <p x-show="open" @click.away="open = false" class="flex items-center justify-between w-full pb-9">
                    {{$item['desc']}}
                </p>
            </div>
            @endforeach
        </div>
    </section>

    <div class="relative w-full my-auto text-white">
        <section class="text-center">
            <div class="z-10 grid w-full grid-cols-1 gap-4 mx-auto md:grid-cols-3 md:divide-x">
                @foreach ($serviceList->section_3_content ?? [] as $item)
                <p>{{$item['title']}}</p>
                @endforeach
            </div>
        </section>

        <x-atom.img src="{{$serviceList->section_3_image->first()['url']}}"
            class="absolute top-0 w-full h-full brightness-50 z-8" />
    </div>

    <section>
        <div class="divide-y divide-opacity-20">
            <div class="flex w-full py-9">
                <div class="w-1/2"></div>
                @foreach ($serviceList->section_4_content ?? [] as $item)
                <div class="flex-1 text-center">{{$item['title']}}</div>
                @endforeach
            </div>

            @foreach ($serviceList->section_4_subcontent ?? [] as $item)
            <div class="flex w-full py-9">
                <div class="w-1/2">
                    {{$item['title']}}
                </div>
                @foreach ($item['checklist'] as $item)
                <div class="flex-1 text-center">
                    {{$item['checklist'] === 'Yes' ? '✓' : ''}}
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </section>

    <x-orga.slider xl="5" space_xl="40" notcenter>
        @foreach ($serviceList->section_4_image as $item)
        <x-atom.a class="swiper-slide !w-[60%] md:!w-[40%]" href="{{ $item['url'] }}">
            <figure class="relative w-full px-0">
                <x-atom.img src="{{ $item['url'] }}" class="w-full h-[30vh] md:h-[50vh]" />
            </figure>
        </x-atom.a>
        @endforeach
    </x-orga.slider>

    <section>
        <div class="title-center">
            @foreach ($serviceList->section_5_content ?? [] as $item)
            @if ($item['subheading'] != '')
            <small>{!! $item['subheading'] !!}</small>
            @endif
            @if ($item['heading'] != '')
            <h4>{{ $item['heading'] }}</h4>
            @endif
            @if ($item['desc'] != '')
            <p>{!! $item['desc'] !!}</p>
            @endif
            @endforeach
        </div>

        <div class="divide-y divide-opacity-20">
            @foreach ($serviceTestimonial as $item)
            <div class="flex flex-col justify-between w-full py-4 space-y-2 md:py-12 md:flex-row md:space-y-0">
                <div class="w-full space-y-3 lg:w-4/12">
                    <h4>{{$item->content[0]['rating'] . '.0'}} <span class="text-sm font-normal">out of 5</span></h4>
                </div>

                <div class="w-full space-y-5 lg:w-8/12">
                    <p>{{$item->content[0]['comment']}}</p>
                    <small>{{$item->content[0]['name']}}</small>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <div class="full">
        <div class="relative !w-full py-12 md:py-16 mx-auto bg-primary text-white dark:bg-white dark:text-primary">
            <div class="flex w-10/12 mx-auto">
                @foreach ($serviceList->section_6_content ?? [] as $item)
                <div class="z-10 grid grid-cols-2 gap-5 py-8 md:gap-8 md:py-16">
                    <div class="col-span-2 md:col-span-1">
                        <h4 class="font-medium">
                            {{$item['pricing']}}
                        </h4>
                        <small class="normal-case">
                            {{$item['duration']}}
                        </small>
                    </div>

                    <div class="col-span-2 md:col-span-1">
                        <h4 class="font-medium">
                            {{$item['heading']}}
                        </h4>
                    </div>

                    <div class="col-span-2 space-y-10 md:col-start-2 md:col-span-1">
                        <div class="grid w-full grid-cols-1 gap-1 md:grid-cols-2">
                            @foreach ($item['desc'] as $desc)
                            <div class="flex items-center space-x-3">
                                <x-atom.svg-checklist />
                                <small>{{$desc['desc']}}</small>
                            </div>
                            @endforeach
                        </div>

                        <div class="flex justify-center space-x-3 md:justify-start">
                            <a href="{{$item['button_link']}}">
                                <x-atom.button outlineSecondary>
                                    {{$item['button_text']}}
                                </x-atom.button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <x-atom.svg-background />
        </div>
    </div>
</div>
