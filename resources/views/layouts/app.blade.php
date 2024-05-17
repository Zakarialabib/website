<!DOCTYPE html>
{{-- isDarkMode from app.js  --}}
<html x-data="mainTheme" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    :class="{ 'dark': isDarkMode, 'rtl': isRtl }" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="dns-prefetch" href="{{ request()->getSchemeAndHttpHost() }}">
    <link rel="preconnect" href="{{ request()->getSchemeAndHttpHost() }}">
    <link rel="prefetch" href="{{ request()->getSchemeAndHttpHost() }}">
    <link rel="prerender" href="{{ request()->getSchemeAndHttpHost() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Source+Code+Pro:wght@300&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">

    <title>{{ $title ?? '' }} | {{ config('app.name', 'ZakariaLabib') }} </title>

    @stack('styles')

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireScriptConfig

    @stack('scripts')

</head>

<body class="font-sans antialiased m-0 bg-gray-900">
    <div class="min-h-screen ">
        <section class="relative">
            
            <x-header :title="'ZakariaLabib'" class="bg-green-300 bg-opacity-60" />

            <div class="bg-green-300 text-green-800 my-auto mt-10 w-3/4 p-10 mx-auto shadow-sm rounded-lg bg-opacity-60">
                @yield('content')

                @isset($slot)
                    {{ $slot }}
                @endisset
            </div>

        </section>
    </div>
</body>

</html>
