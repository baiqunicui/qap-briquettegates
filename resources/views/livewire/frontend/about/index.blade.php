<div>
    <section>
        <div class="title-left">
            @if ($about->section_1_content[0]['subheading'] != '')
            <small>{!! $about->section_1_content[0]['subheading'] !!}</small>
            @endif
            @if ($about->section_1_content[0]['heading'] != '')
            <h3>{!! $about->section_1_content[0]['heading'] !!}</h3>
            @endif
        </div>
    </section>

    <x-orga.slider xl="3" space_xl="20">
        @foreach ($slider as $item)
        <x-atom.img :src="$item->image->first()['url']" class="swiper-slide w-auto h-[30vh] md:h-[40vh]" />
        @endforeach
    </x-orga.slider>

    <section class="space-y-12">
        @foreach ($about->section_2_content as $item)
        <div class="space-y-4">
            @if ($item['heading'] != '')
            <small class="tracking-widest uppercase">{!! $item['heading'] !!}</small>
            @endif
            @if ($item['subheading'] != '')
            <h6 class="font-medium opacity-40">{!! $item['subheading'] !!}</h6>
            @endif
            @if ($item['desc'] != '')
            <h6 class="font-medium">{!! $item['desc'] !!}</h6>
            @endif
        </div>
        @endforeach
    </section>

    <div class="bg-[#eeeeee] dark:bg-black/20">
        <section class="column">
            @if ($about->section_3_content[0]['heading'] != '')
            <h4>{!! $about->section_3_content[0]['heading'] !!}</h4>
            @endif
            @if ($about->section_3_content[0]['subheading'] != '')
            <p>{!! $about->section_3_content[0]['subheading'] !!}</p>
            @endif

            <div class="grid grid-cols-2 gap-4 md:gap-8 md:grid-cols-3">
                @foreach ($team as $item)
                <div class="col-span-1 space-y-3">
                    <x-atom.img-square :src="$item->image->first()['url']" class="rounded-none" />

                    <ul class="space-y-1 md:space-y-2">
                        <a href="{{$item->link}}" class="space-y-1 md:space-y-2">
                            <p class="font-medium leading-none">{{$item->heading}}Michael Doe</p>
                            <small class="flex">{{$item->heading}}Senior Designer at Google</small>
                        </a>
                    </ul>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
