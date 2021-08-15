<div class="py-24">
    <div id="section_1" class="space-y-16">
        <div class="title-center">
            @foreach ($collection->content ?? [] as $item)
            @if ($item['subheading'] != '')
            <small>{!! $item['subheading'] !!}</small>
            @endif
            @if ($item['heading'] != '')
            <h4>{!! $item['heading'] !!}</h4>
            @endif
            @if ($item['desc'] != '')
            <p>{!! $item['desc'] !!}</p>
            @endif
            @endforeach
        </div>
    </div>

    <div id="full_section_2">
        <div class="flex flex-wrap justify-center w-9/12 pt-16 mx-auto">
            @foreach($client as $item)
            <div x-data="{open: false}" class="w-full sm:w-1/2 lg:w-1/3">
                <div class="w-[80%] lg:w-[75%] p-6 lg:p-10 mx-auto space-y-4">
                    <div class="relative w-full after:content-[''] block pb-[100%] ">
                        <x-atom.img :src="$item->image->first()['url']" class="absolute w-full h-full rounded-none" />
                    </div>

                    <x-atom.a x-on:click="open = true" class="text-center">
                        <p class="font-semibold capitalize opacity-100">
                            {{$item->title}}
                        </p>
                    </x-atom.a>

                </div>

                <x-orga.modal x-show="open">
                    <section class="relative p-0 m-auto bg-white">
                        <div class="absolute top-0 right-0">
                            <x-atom.a class="p-2 bg-secondary" x-on:click="open = false">
                                <x-atom.svg-close class="h-3 font-bold text-white md:h-5" />
                            </x-atom.a>
                        </div>

                        <div class="flex flex-col p-5 space-y-4 md:space-y-0 md:p-6 md:space-x-8 md:flex-row">
                            <div class="w-full md:w-5/12">
                                <x-atom.img-square :src="$item->image->first()['url']"
                                    img-class="!rounded-tr-[4.5rem] rounded-xl" class="w-full" />
                            </div>

                            <div class="w-full space-y-8 overflow-x-scroll md:w-7/12 max-h-[30vh] lg:max-h-[52vh]">
                                <h4>{{$item->title}}</h4>

                                @foreach ($item->content as $item)
                                <p>{!!$item['desc']!!}</p>

                                <div class="flex space-x-7">
                                    @foreach ($item['content'] ?? [] as $item)
                                    <ul class="space-y-1">
                                        <small class="tracking-widest uppercase">{!!$item['title']!!}</small>
                                        <h6 class="capitalize">{!!$item['value']!!}</h6>
                                    </ul>
                                    @endforeach
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </section>
                </x-orga.modal>
            </div>
            @endforeach
        </div>
    </div>
</div>
