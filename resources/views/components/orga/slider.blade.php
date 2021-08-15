<div x-data="{swiper: null}" x-init="
    swiper = new Swiper($refs.container,
    {
        loop: true,
        centeredSlides: true,

        @isset($arrow)
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        @endisset

        @isset($paginationBullet)
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
        @endisset

        @if (isset($balance))
        autoHeight: true,
        @endif

        @if (isset($center))
        autoHeight: true,
        @endif

        breakpoints: {
            240: {
                slidesPerView: {{$xs ?? "'auto'"}},
                spaceBetween: {{$spaceXs ?? '10'}},
            },
            640: {
                slidesPerView: {{$sm ?? "'auto'"}},
                spaceBetween: {{$spaceSm ?? '10'}},
            },
            768: {
                @if (isset($notcenter))
                centeredSlides: false,
                @endif
                slidesPerView: {{$md ?? "'auto'"}},
                spaceBetween: {{$spaceMd ?? '10'}},
            },
            1024: {
                @if (isset($notcenter))
                centeredSlides: false,
                @endif
                slidesPerView: {{$xl ?? "'auto'"}},
                spaceBetween: {{$spaceXl ?? '10'}},

            },
        },
    })" class="relative flex flex-row w-full mx-auto">

    <div x-ref="container" class="swiper-container">
        <div class="swiper-wrapper">
            {{$slot}}
        </div>

        @isset($paginationBullet)
        <div class="swiper-pagination"></div>
        @endisset

        @isset($arrow)
        <div class="p-4 rotate-180 rounded-full bg-primary swiper-button-prev">
            <x-atom.svg-play />
        </div>

        <div class="p-4 rounded-full bg-primary swiper-button-next">
            <x-atom.svg-play />
        </div>
        @endisset
    </div>

    <style>
        #slider-center.swiper-slide-prev,
        #slider-center.swiper-slide-next {
            height: 80%;
        }
    </style>

</div>
