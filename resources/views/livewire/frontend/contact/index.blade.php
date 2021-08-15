<div class="-mt-32 main">
    <div class="relative w-full h-[80vh] z-1">
        <div class="absolute inset-0 z-50 flex w-full h-full py-32 bg-black/80">
            <section class="py-0 mt-auto space-y-3 text-white">
                <h3 class="leading-none">{{$contact->section_1_content[0]['heading']}}</h3>
                <small class="ml-1 tracking-widest uppercase">{{$contact->section_1_content[0]['subheading']}}</small>
            </section>
        </div>

        <iframe class="absolute inset-0 w-full h-full z-1 filter grayscale" id="gmap_canvas"
            src="{{$contact->section_1_content[0]['maps_link']}}" frameborder="0" scrolling="no" marginheight="0"
            marginwidth="0"></iframe>
    </div>

    <div class="bg-white z-3">
        <section class="space-y-5">
            <h4 class="leading-tight">
                {{$contact->section_2_content[0]['heading']}}
            </h4>

            <div class="grid grid-cols-5 gap-4 text-white">
                @foreach ($contact->section_2_subcontent as $item)
                <div
                    class="{{$loop->even ? 'md:col-span-2 bg-green-600' : 'md:col-span-3 bg-blue-700'}} col-span-5 p-10">
                    <svg class="w-auto h-16 -ml-3 text-white invert" viewBox="0 0 20 20">
                        <path
                            d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589">
                        </path>
                    </svg>

                    <ul class="mt-16 space-y-6">
                        <h5>{{$item['heading']}}</h5>
                        <p>{{$item['subheading']}}</p>
                        <ul class="space-y-2">
                            @foreach ($item['value'] as $item)
                            <p class="flex leading-none">{{$item['title']}} {{$item['value']}}</p>
                            @endforeach
                        </ul>
                    </ul>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <div class="z-3 text-black bg-[#eeeeee]">
        <section class="space-y-5">
            <h4 class="text-left lg:text-center">
                {{$contact->form[0]['title']}}
            </h4>

            <livewire:frontend.form.contact>
        </section>
    </div>
</div>
