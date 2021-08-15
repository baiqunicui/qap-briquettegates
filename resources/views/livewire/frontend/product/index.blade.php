<div class="main">
    <div class="relative z-0 min-h-screen -mt-20 ">
        <section class="absolute inset-0 h-full z-[100]">
            <div class="flex flex-col justify-center w-full mx-auto space-y-12 lg:w-10/12">
                <div data-aos="fade-right" data-aos-delay="1050" class="flex space-x-2">
                    <h5 class="font-bold leading-none">{!! '01' !!}</h5>
                    <small class="mt-1 leading-none">{!! '/ ' !!}</small>
                    <small class="mt-1 leading-none">{!! '05' !!}</small>
                </div>

                <h2 data-aos="fade-right" data-aos-delay="1300">
                    {!!'betterstage<br><i><span class="font-normal">signature</span></i>'!!}
                </h2>

                <div data-aos="fade-right" data-aos-delay="1600" class="flex space-x-2 uppercase">
                    @foreach (['Music', 'Video', 'Movie'] as $item)
                    <p class="{{$loop->odd ? 'font-bold' : ''}}">
                        {!! '/ ' . $item !!}
                    </p>
                    @endforeach
                </div>
            </div>
        </section>

        <div class="absolute bottom-0 z-[100] w-full mx-auto">
            <section>
                <div class="flex justify-between">
                    <x-atom.button data-aos="fade-right" data-aos-delay="4000" iconLeft outlineSecondary>{{'Prev'}}
                    </x-atom.button>
                    <x-atom.button data-aos="fade-left" data-aos-delay="4000" iconUp outlineSecondary>{{'Next'}}
                    </x-atom.button>
                </div>
            </section>
        </div>

        <x-atom.img src="/assets/images/img-1.jpg"
            class="filter brightness-[0.6] absolute inset-0 z-0 w-full h-full animate-zoom">
        </x-atom.img>
    </div>
</div>
