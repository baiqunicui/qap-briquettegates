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
    <title>Briquette Gates</title>
    @endif

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TTXQ83KNGS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-TTXQ83KNGS');
    </script>

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
    </div>

    <script src="{{ asset('/fejs/app.js?n=2') }}" defer></script>
    @livewireScripts
    <script src="{{ asset('/fejs/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
