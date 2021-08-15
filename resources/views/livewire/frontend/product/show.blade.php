<div class="main">
    @foreach ($productList->section_1_content ?? [] as $item)
    <div class="-mt-20 relative min-h-screen bg-[{{$item['color']}}] z-0">
        <section class="absolute inset-0 h-full z-[100]">
            <div
                class="flex flex-col-reverse items-center justify-between space-y-10 space-y-reverse md:flex-row md:space-y-0">
                <div class="flex flex-col justify-center w-full space-y-8 md:w-6/12">
                    <h3 class="text-center text-white md:text-left">
                        {!!$item['title']!!}
                    </h3>

                    <div class="flex justify-center space-x-3 md:justify-start">
                        @foreach ($item['button'] as $button)
                        <a href="{{$button['link']}}">
                            <x-atom.button outlineSecondary>
                                {{$button['title']}}
                            </x-atom.button>
                        </a>
                        @endforeach
                    </div>

                    <div class="flex justify-between text-center text-white md:text-left">
                        @foreach ($item['info'] ?? [] as $info)
                        <ul class="space-y-1">
                            <small class="tracking-widest uppercase">{{$info['subheading']}}</small>
                            <h6 class="capitalize">{{$info['heading']}}</h6>
                        </ul>
                        @endforeach
                    </div>
                </div>

                <div class="relative flex justify-center w-full md:w-6/12 ">
                    <x-atom.img-circle src="{{$productList->section_1_image->first()['url']}}"
                        class="w-full md:w-[80%] md:ml-auto rounded-full" />
                    <x-atom.img src="https://cube.webuildthemes.com/assets/images/svg/featured-light.svg"
                        class="absolute bottom-0 right-0 w-auto h-32 shadow-none" />
                </div>
            </div>
        </section>

        <x-atom.svg-background-2 class="absolute inset-0 z-0 w-full h-full"></x-atom.svg-background-2>
    </div>
    @endforeach

    <div class="bg-[#eeeeee]">
        <section>
            @foreach ($productList->section_2_content ?? [] as $item)
            <div class="title-center">
                @if ($item['subheading'] != '')
                <small>{!! $item['subheading'] !!}</small>
                @endif
                @if ($item['heading'] != '')
                <h4>{{ $item['heading'] }}</h4>
                @endif
                @if ($item['desc'] != '')
                <p>{!! $item['desc'] !!}</p>
                @endif
            </div>
            @endforeach

            <x-orga.masonry>
                @foreach ($productList->section_2_subcontent ?? [] as $section_2_subcontent)
                <x-mole.masonry-item>
                    <ul class="pt-10 space-y-10 bg-white">
                        <h5 class="px-10 font-semibold">
                            {{$section_2_subcontent['title']}}
                        </h5>

                        <ul class="px-10 divide-y">
                            @foreach ($section_2_subcontent['content'] ?? [] as $content)
                            <div x-data="{ data: false }">
                                <x-atom.a x-on:click="data = true"
                                    class="flex items-center justify-between w-full py-8">
                                    <p>{{$content['heading']}}</p>
                                    <div x-ref="data" :class="{ 'rotate-180' : data === true }" class="flex-shrink-0">
                                        <x-atom.svg-up class="rotate-90 text-primary" />
                                    </div>
                                </x-atom.a>

                                <p x-show="data" x-on:click.away="data = false"
                                    class="flex items-center justify-between w-full pb-9">
                                    {{$content['desc']}}
                                </p>
                            </div>
                            @endforeach
                        </ul>

                        <small class="uppercase flex px-10 py-10 bg-[#f5f5f5]">
                            {{$section_2_subcontent['lessons']}} / {{$section_2_subcontent['duration']}}
                        </small>
                    </ul>
                </x-mole.masonry-item>
                @endforeach
            </x-orga.masonry>
        </section>
    </div>

    <div class="border-b">
        <section>
            @foreach ($productList->section_3_content ?? [] as $section_3_content)
            <div class="title-left">
                @if ($section_3_content['subheading'] != '')
                <small>{!! $section_3_content['subheading'] !!}</small>
                @endif
                @if ($section_3_content['heading'] != '')
                <h4>{{ $section_3_content['heading'] }}</h4>
                @endif
                @if ($section_3_content['desc'] != '')
                <p>{!! $section_3_content['desc'] !!}</p>
                @endif
            </div>
            @endforeach

            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                @foreach ($productList->section_3_subcontent ?? [] as $section_3_subcontent)
                <div class="flex col-span-1 space-x-5">
                    <div class="bg-[#eeeeee] w-9 h-9 rounded-full flex items-center justify-center flex-shrink-0">
                        <x-atom.svg-checklist></x-atom.svg-checklist>
                    </div>

                    <p>{{$section_3_subcontent['title']}}</p>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <section>
        @foreach ($productList->section_4_content ?? [] as $section_4_content)
        <div class="title-center">
            @if ($section_4_content['subheading'] != '')
            <small>{!! $section_4_content['subheading'] !!}</small>
            @endif
            @if ($section_4_content['heading'] != '')
            <h4>{{ $section_4_content['heading'] }}</h4>
            @endif
            @if ($section_4_content['desc'] != '')
            <p>{!! $section_4_content['desc'] !!}</p>
            @endif
        </div>
        @endforeach

        <div class="grid grid-cols-1 gap-7 md:grid-cols-3">
            @foreach ($productList->section_4_subcontent ?? [] as $section_4_subcontent)
            {{-- {{dd($section_4_subcontent)}} --}}
            <a href="{{$section_4_subcontent['button_link']}}">
                <div
                    class="flex flex-col justify-end col-span-1 p-6 space-y-4 bg-white shadow-2xl animate-hover rounded-2xl h-[60vh]">
                    <h6 class="pb-6 font-semibold leading-tight ">
                        {{$section_4_subcontent['title']}}
                    </h6>

                    <div class="relative w-full h-[70%]">
                        <x-atom.img-square src="/assets/images/insta-2.jpg"
                            img-class="rounded-xl !rounded-tl-[4.5rem] {{$loop->first ? 'lg:rounded-xl lg:!rounded-tr-[4.5rem]' : ''}} {{$loop->even ? 'lg:rounded-full' : ''}} {{$loop->last ? 'lg:rounded-xl lg:!rounded-tl-[4.5rem]' : ''}}"
                            class="absolute w-full h-full" />
                    </div>

                    <div class="flex items-center justify-between text-primary">
                        <p>{{$section_4_subcontent['button_text']}}</p>
                        <x-atom.svg-up class="text-primary"></x-atom.svg-up>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>
</div>
