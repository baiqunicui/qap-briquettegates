<div class="main">
    @foreach ($slider as $item)
    <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="600"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-center" class="text-white full">
        <a href="{{$item->content[0]['link']}}" class="">
            <div class="w-full h-[70vh] md:h-[82vh] relative flex flex-col shadow-xl rounded-2xl">
                <x-atom.duotone src="{{$item->image->first()['url']}}" class="absolute w-full h-full rounded-2xl" />

                @if ($item->content[0]['heading'] != '')
                <h1 class="font-serif m-auto text-center z-2 rotate-[-10deg]">
                    {!! $item->content[0]['heading'] !!}
                </h1>
                @endif
                @if ($item->content[0]['subheading'] != '')
                <small class="absolute w-full mx-auto text-center bottom-8">
                    {{ $item->content[0]['subheading'] }}
                </small>
                @endif

                <div class="absolute flex justify-center w-full text-center bottom-4">
                    <x-atom.vl />
                </div>
            </div>
        </a>
    </div>
    @endforeach

    <section data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="600"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-center">
        <div class="title-center">
            @if ($home->section_1_content[0]['subheading'] != '')
            <small>{!! $home->section_1_content[0]['subheading'] !!}</small>
            @endif
            @if ($home->section_1_content[0]['heading'] != '')
            <h4>{{ $home->section_1_content[0]['heading'] }}</h4>
            @endif
            @if ($home->section_1_content[0]['desc'] != '')
            <p>{!! $home->section_1_content[0]['desc'] !!}</p>
            @endif
        </div>

        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
            @foreach ($serviceC as $item)
            <div class="flex flex-col col-span-1 p-5 bg-white shadow-2xl animate-hover">
                <a href="{{ route('services.show', ['serviceList' => $item->slug]) }}" class="space-y-4">
                    <div class="relative w-full h-[20vh] md:h-[40vh]">
                        <x-atom.img src="{{$item->section_3_image->first()['url'] ?? ''}}"
                            class="absolute w-full h-full rounded-xl !rounded-tr-[4.5rem]" />
                        <h5 class="absolute bottom-0 p-5 font-bold text-white">{!! $item->title !!}</h5>
                    </div>

                    <div class="flex items-center justify-between text-primary">
                        <small>{{'Learn More'}}</small>
                        <x-atom.svg-up class="text-primary" />
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <section data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="600"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-center">
        <div class="title-center">
            @if ($home->section_2_content[0]['subheading'] != '')
            <small>{!! $home->section_2_content[0]['subheading'] !!}</small>
            @endif
            @if ($home->section_2_content[0]['heading'] != '')
            <h4>{{ $home->section_2_content[0]['heading'] }}</h4>
            @endif
            @if ($home->section_2_content[0]['desc'] != '')
            <p>{!! $home->section_2_content[0]['desc'] !!}</p>
            @endif
        </div>

        <div class="mt-8 md:mt-16">
            <x-atom.img src="{{$home->section_2_image->first()['url']}}" class="w-full mx-auto h-60 md:h-96" />
        </div>
    </section>

    <section data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="600"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-center">
        <div class="flex flex-col-reverse space-y-10 md:space-y-0 md:flex-col">
            <div class="mt-12 column md:flex-row md:space-y-0 md:mt-0">
                <div class="flex-1 title-left">
                    @if ($home->section_3_content[0]['subheading'] != '')
                    <small>{!! $home->section_3_content[0]['subheading'] !!}</small>
                    @endif
                    @if ($home->section_3_content[0]['heading'] != '')
                    <h4>{{ $home->section_3_content[0]['heading'] }}</h4>
                    @endif
                    @if ($home->section_3_content[0]['desc'] != '')
                    <p>{!! $home->section_3_content[0]['desc'] !!}</p>
                    @endif
                </div>

                <div class="flex flex-1 md:justify-end">
                    @if ($home->section_3_content[0]['desc'] != '')
                    <x-atom.a href="{{$home->section_3_content[0]['button_link']}}" class="text-secondary">
                        <small class="font-bold">{{$home->section_3_content[0]['button_text']}}</small>
                    </x-atom.a>
                    @endif
                </div>
            </div>

            <div class="grid w-full grid-cols-10 grid-rows-2 gap-10 md:-mt-16 z-2">
                <div class="col-span-5 row-span-2 mt-auto space-y-10 md:col-span-3">
                    <x-atom.img-square
                        src="https://slide.smartwpress.com/demo1/wp-content/uploads/2020/11/Untitled-1.jpg"
                        class="w-[40%] ml-auto" />
                    <x-atom.img-square
                        src="https://slide.smartwpress.com/demo1/wp-content/uploads/2016/11/album_too_good.jpg"
                        class="w-full" />
                </div>

                <div class="col-span-5 row-span-2 pt-8 my-auto md:pt-20 md:col-span-3">
                    <x-atom.img-square
                        src="https://slide.smartwpress.com/demo1/wp-content/uploads/2020/11/let-you-down-yellow.jpg"
                        class="w-full" />
                </div>

                <div class="hidden row-span-2 -mb-6 space-y-10 md:block md:col-span-4">
                    <x-atom.img-square
                        src="https://slide.smartwpress.com/demo1/wp-content/uploads/2016/11/album_no_more.jpg"
                        class="w-[90%]" />

                    <div class="grid grid-cols-5 gap-10">
                        <div class="col-span-3">
                            <x-atom.img-square
                                src="https://slide.smartwpress.com/demo1/wp-content/uploads/2020/11/dark-knight-dummo.jpg"
                                class="w-full" />
                        </div>

                        <div class="col-span-2">
                            <x-atom.img-square
                                src="https://slide.smartwpress.com/demo1/wp-content/uploads/2016/09/album_say_you_do.jpg"
                                class="w-full" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="600"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-center">
        <div class="title-center">
            @if ($home->section_4_content[0]['subheading'] != '')
            <small>{!! $home->section_4_content[0]['subheading'] !!}</small>
            @endif
            @if ($home->section_4_content[0]['heading'] != '')
            <h4>{{ $home->section_4_content[0]['heading'] }}</h4>
            @endif
            @if ($home->section_4_content[0]['desc'] != '')
            <p>{!! $home->section_4_content[0]['desc'] !!}</p>
            @endif
        </div>

        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
            @foreach ($product as $item)
            <div
                class="flex flex-col col-span-1 p-5 bg-white shadow-2xl dark:border dark:bg-primary dark:rounded-xl dark:!rounded-tr-[4.5rem] border-radius dark:border-opacity-20 dark:text-white animate-hover">
                <a href="{{ route('products.show', ['productList' => $item->slug]) }}" class="space-y-4">
                    <div class="relative w-full h-[20vh] md:h-[40vh]">
                        <x-atom.img src="{{$item->section_1_image->first()['url'] ?? ''}}"
                            class="absolute w-full h-full rounded-xl !rounded-tr-[4.5rem]" />
                        <h5 class="absolute bottom-0 p-5 font-bold text-white">{!! $item->title !!}</h5>
                    </div>

                    <div class="flex items-center justify-between text-primary dark:text-white">
                        <small>{{'Learn More'}}</small>
                        <x-atom.svg-up class="text-primary" />
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <section>
        @livewire('frontend.form.booking')
    </section>
</div>
