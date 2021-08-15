<div id="full_section_6">
    <x-orga.slider space-xs="16" space_xl="40" paginationBullet arrow center>
        @foreach ($slider as $item)
        <x-atom.a id="slider-center" class="swiper-slide !w-[80%] md:!w-[50%] lg:!w-[90%] mt-auto" :href="$item->link">
            <figure class="relative w-full" style="height: inherit">
                <x-atom.duotone :src="$item->image->first()['url']" class="!w-full !max-h-full h-[85vh] opacity-60" />
                <h5 class="absolute bottom-4 left-4 text-white z-[400] font-serif">
                    {{-- {{$item->heading}} --}}{!! 'Bittersweet' !!}
                </h5>
                {{-- <x-atom.img :src="$item->image->first()['url']" class="!w-full !max-h-full h-[85vh]" /> --}}
            </figure>
        </x-atom.a>
        @endforeach
    </x-orga.slider>
</div>

<div id="full_section_7">
    <x-orga.slider sm="2" md="3" xl="4" space_xl="40">
        @foreach ($slider as $item)
        <x-atom.a class="swiper-slide" :href="$item->link">
            <figure class="relative w-full px-0">
                <x-atom.img :src="$item->image->first()['url']" class="h-auto w-full max-h-[50vh] md:max-h-[80vh]" />
                <h4 class="absolute bottom-4 left-10">{{$item->heading}}</h4>
            </figure>
        </x-atom.a>
        @endforeach
    </x-orga.slider>
</div>

<div id="full_section_8">
    <x-orga.slider xl="2" space_xl="40">
        @foreach ($slider as $item)
        <x-atom.a class="swiper-slide" :href="$item->link">
            <figure class="relative w-full px-0">
                <x-atom.img :src="$item->image->first()['url']" class="w-full h-[30vh] md:h-[50vh]" />
                <h4 class="absolute bottom-4 left-10">{{$item->heading}}</h4>
            </figure>
        </x-atom.a>
        @endforeach
    </x-orga.slider>
</div>

<div id="full_section_9">
    <x-orga.slider balance xs="2" sm="2" xl="4" space-xl="20">
        @foreach ($slider as $item)
        <x-atom.a id="slider-balance" class="swiper-slide" :href="$item->link">
            <figure class="relative w-full">
                <x-atom.img :src="$item->image->first()['url']" class="!w-full h-80" />
                <h5 class="absolute bottom-4 left-4 text-white z-[400]">
                    {{$item->heading}}
                </h5>
            </figure>
        </x-atom.a>
        @endforeach
    </x-orga.slider>
</div>
