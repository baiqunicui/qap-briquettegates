@php
$re =
'/(?im)\b(?:https?:\/\/)?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)\/(?:(?:\??v=?i?=?\/?)|watch\?vi?=|watch\?.*?&v=|embed\/|)([A-Z0-9_-]{11})\S*(?=\s|$)/';
$str = 'http://youtube.com/v/tFad5gHoBjY
https://youtube.com/vi/tFad5gHoBjY
http://www.youtube.com/?v=tFad5gHoBjY
http://www.youtube.com/?vi=tFad5gHoBjY
https://www.youtube.com/watch?v=tFad5gHoBjY
youtube.com/watch?vi=tFad5gHoBjY
youtu.be/tFad5gHoBjY
http://youtu.be/qokEYBNWA_0?t=30m26s
youtube.com/v/7HCZvhRAk-M
youtube.com/vi/7HCZvhRAk-M
youtube.com/?v=7HCZvhRAk-M
youtube.com/?vi=7HCZvhRAk-M
youtube.com/watch?v=7HCZvhRAk-M
youtube.com/watch?vi=7HCZvhRAk-M
youtu.be/7HCZvhRAk-M
youtube.com/embed/7HCZvhRAk-M
http://youtube.com/v/7HCZvhRAk-M
http://www.youtube.com/v/7HCZvhRAk-M
https://www.youtube.com/v/7HCZvhRAk-M
youtube.com/watch?v=7HCZvhRAk-M&wtv=wtv
http://www.youtube.com/watch?dev=inprogress&v=7HCZvhRAk-M&feature=related
youtube.com/watch?v=7HCZvhRAk-M
http://youtube.com/v/dQw4w9WgXcQ?feature=youtube_gdata_player
http://youtube.com/vi/dQw4w9WgXcQ?feature=youtube_gdata_player
http://youtube.com/?v=dQw4w9WgXcQ&feature=youtube_gdata_player
http://www.youtube.com/watch?v=dQw4w9WgXcQ&feature=youtube_gdata_player
http://youtube.com/?vi=dQw4w9WgXcQ&feature=youtube_gdata_player
http://youtube.com/watch?v=dQw4w9WgXcQ&feature=youtube_gdata_player
http://youtube.com/watch?vi=dQw4w9WgXcQ&feature=youtube_gdata_player
http://youtu.be/dQw4w9WgXcQ?feature=youtube_gdata_player';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
@endphp
<div class="main">
    {{-- @foreach ($matches as $item)
    {{$item[1]}}
    @endforeach --}}

    {{-- <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay"
        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/717407416&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
    <div
        style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
        <a href="https://soundcloud.com/kurniawanrizki" title="kurniawanrizki" target="_blank"
            style="color: #cccccc; text-decoration: none;">kurniawanrizki</a> · <a
            href="https://soundcloud.com/kurniawanrizki/pamungkas-to-the-bone" title="Pamungkas - To The Bone"
            target="_blank" style="color: #cccccc; text-decoration: none;">Pamungkas - To The Bone</a>
    </div> --}}
    <section>
        @foreach ($channelIndex->section_1_content ?? [] as $section_1_content)
        <div class="title-center">
            @if ($section_1_content['subheading'] != '')
            <small>{!! $section_1_content['subheading'] !!}</small>
            @endif
            @if ($section_1_content['heading'] != '')
            <h4>{{ $section_1_content['heading'] }}</h4>
            @endif
            @if ($section_1_content['desc'] != '')
            <p>{!! $section_1_content['desc'] !!}</p>
            @endif
        </div>
        @endforeach

        <div class="grid w-full grid-cols-10 grid-rows-2 gap-10 md:-mt-16 z-2">
            <div class="col-span-5 row-span-2 mt-auto space-y-10 md:col-span-3">
                <x-atom.img-square src="https://slide.smartwpress.com/demo1/wp-content/uploads/2020/11/Untitled-1.jpg"
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
    </section>

    <section>
        <div class="title-center">
            <h4>{!! 'Sometimes, we raise the occasion' !!}</h4>
        </div>

        <div class="mb-8 md:mb-0 md:mt-16">
            <ul class="divide-y divide-gray-200 dark:divide-white/20">
                <div class="flex items-center justify-between w-full py-3 md:py-5">
                    <ul class="w-[8%] space-y-1 text-center">
                        <h6>
                            {{'12'}}
                        </h6>

                        <small>
                            {{'Jul'}}
                        </small>
                    </ul>

                    <x-atom.img
                        src="https://slide.smartwpress.com/demo1/wp-content/uploads/2016/11/gallery5-300x200.jpg"
                        class="h-full w-[24%] rounded-md md:w-20" />

                    <ul class="w-auto space-y-2">
                        <h6>
                            {{'Wakestock Festival'}}
                        </h6>

                        <small>
                            {{'Abersoch, Gwynedd, UK'}}
                        </small>
                    </ul>

                    <small class="hidden w-[24%] md:flex">
                        Abersoch, Gwynedd, UK
                    </small>

                    <small class="hidden w-[12%] md:flex">
                        9.00 PM
                    </small>

                    <x-atom.svg-up class="w-[5%] -rotate-45" />
                </div>

                <div class="flex items-center justify-between w-full py-3 md:py-5">
                    <ul class="w-[8%] space-y-1 text-center">
                        <h6>
                            {{'12'}}
                        </h6>

                        <small>
                            {{'Jul'}}
                        </small>
                    </ul>

                    <x-atom.img
                        src="https://slide.smartwpress.com/demo1/wp-content/uploads/2016/11/gallery5-300x200.jpg"
                        class="h-full w-[24%] rounded-md md:w-20" />

                    <ul class="w-auto space-y-2">
                        <h6>
                            {{'Wakestock Festival'}}
                        </h6>

                        <small>
                            {{'Abersoch, Gwynedd, UK'}}
                        </small>
                    </ul>

                    <small class="hidden w-[24%] md:flex">
                        Abersoch, Gwynedd, UK
                    </small>

                    <small class="hidden w-[12%] md:flex">
                        9.00 PM
                    </small>

                    <x-atom.svg-up class="w-[5%] -rotate-45" />
                </div>
            </ul>
        </div>

        <div class="title-center">
            <x-atom.a class="animate-hover">
                <x-atom.button colorSecondary>{{'MORE ABOUT US'}}</x-atom.button>
            </x-atom.a>
        </div>
    </section>

    <section>
        <div class="flex flex-col w-full border shadow-2xl md:flex-row rounded-2xl border-white/10">
            <x-atom.duotone src="https://slide.smartwpress.com/demo1/wp-content/uploads/2018/03/player_cover.jpg"
                class="w-full h-[40vh] md:w-[45%] md:h-[60vh]" />

            <div class="w-full md:w-[55%] bg-white dark:bg-primary py-8 md:py-10 space-y-6">
                <div class="flex items-end justify-between w-full px-6 md:px-8">
                    <ul class="">
                        <small>{{'Featured Album'}}</small>
                        <h5>{{'Last Man Standing'}}</h5>
                    </ul>

                    <x-atom.button outlineSecondary>
                        {{'Visit Us'}}
                    </x-atom.button>
                </div>

                <ul class="divide-y divide-white divide-opacity-20">
                    <div class="py-3 hover:bg-gray-100 dark:hover:bg-black">
                        <x-atom.a class="flex items-center justify-between w-full px-8">
                            <div class="flex items-center space-x-4">
                                <x-atom.svg-play />
                                <small>{{'Last Man Standing'}}</small>
                            </div>
                            <x-atom.img src="/assets/socmed/youtube.svg" class="w-4 h-4 fill-['white']" />
                        </x-atom.a>
                    </div>

                    <div class="py-3 hover:bg-gray-100 dark:hover:bg-black">
                        <x-atom.a class="flex items-center justify-between w-full px-8">
                            <div class="flex items-center space-x-4">
                                <x-atom.svg-play />
                                <small>{{'Last Man Standing'}}</small>
                            </div>
                            <x-atom.img src="/assets/socmed/youtube.svg" class="w-4 h-4 fill-['white']" />
                        </x-atom.a>
                    </div>
                </ul>
            </div>
        </div>
    </section>
</div>
