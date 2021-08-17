<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/fecss/app.css?n=2">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">

    @if (isset($seo))
    <title>{{ $seo['title'] }}</title>
    <meta name="title" content="{{ $seo['title'] }}">
    <meta name="description" content="{{ $seo['description'] }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $seo['title'] }}">
    <meta name="twitter:description" content="{{ $seo['description'] }}" />
    <meta name="twitter:image" content="{{ $seo['image'] ? $seo['image'] : asset('assets/IDO.svg') }}">

    <meta property="og:title" content="{{ $seo['meta_title'] ?? '' }}">
    <meta property="og:description" content="{{ $seo['description'] }}">
    <meta property="og:image" content="{{ $seo['image'] ? $seo['image'] : asset('assets/IDO.svg') }}">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />

    @else
    <title>Bittersweet</title>
    @endif

    @livewireStyles
</head>

<body
    x-init="darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    x-data="{'darkMode': true}" class="antialiased">
    <div :class="{'dark': darkMode === true}" class="w-full mx-auto">

        <div class="bg-white dark:bg-primary text-primary dark:text-white">
            <livewire:header.fe-index />
            {{ $slot }}
            <livewire:footer.fe-index />
        </div>

        <div class="fixed bottom-0 z-[99999] right-0 pr-6 pb-14">
            <div class="flex justify-center">
                <div class="flex justify-center w-auto space-x-2 rounded-full">
                    <small class="dark:text-white">
                        Light
                    </small>

                    <label for="toggle"
                        class="flex items-center h-5 p-1 duration-300 ease-in-out bg-gray-300 rounded-full cursor-pointer w-9 dark:bg-gray-600">
                        <div
                            class="w-4 h-4 duration-300 ease-in-out transform bg-white rounded-full shadow-md toggle-dot dark:translate-x-3">
                        </div>
                    </label>

                    <small class="dark:text-white">
                        Dark
                    </small>

                    <input id="toggle" type="checkbox" class="hidden" :value="darkMode"
                        @change="darkMode = !darkMode" />
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/fejs/app.js?n=2') }}" defer></script>
    @livewireScripts
    <script src="{{ asset('/fejs/swiper-bundle.min.js?n=2') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
