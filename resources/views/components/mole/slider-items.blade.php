<div class="swiper-slide">
    <x-atom.a :href="$item->link">
        <figure class="relative w-full px-5">
            <x-atom.img :src="$item->image->first()['url']" class="h-auto w-full max-h-[50vh] md:max-h-[80vh]" />
            <h4 class="absolute bottom-4 left-10">{{$item->heading}}</h4>
        </figure>
    </x-atom.a>
</div>
