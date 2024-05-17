<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="mainTheme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="dns-prefetch" href="{{ request()->getSchemeAndHttpHost() }}">
    <link rel="preconnect" href="{{ request()->getSchemeAndHttpHost() }}">
    <link rel="prefetch" href="{{ request()->getSchemeAndHttpHost() }}">
    <link rel="prerender" href="{{ request()->getSchemeAndHttpHost() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Head Tags -->
    {{-- @if (settings('head_tags'))
        {!! settings('head_tags') !!}
    @endif --}}

    <title>
        {{ config('app.name', 'ZakariaLabib') }} || @yield('title')
    </title>

    @hasSection('meta')
        @yield('meta')
    @else
        <meta name="title" content="{{ settings('seo_meta_title') }}">
        <meta name="description" content="{{ settings('seo_meta_description') }}">
        <meta property="og:title" content="{{ settings('site_title') }}">
        <meta property="og:description" content="{{ settings('seo_meta_description') }}">
        <meta property="og:url" content="/" />
    @endif

    <meta property="og:locale" content="{{ app()->getLocale() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="zakarialabib" />
    <meta name="author" content="zakarialabib">
    <link rel="canonical" href="{{ URL::current() }}">
    <!-- Twitter sharing -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ isset($title) ? $title . ' | ' : '' }}{{ config('app.name') }}">
    <meta name="twitter:creator" content="@zakarialabib" />
    <!-- /Twitter sharing -->

    <!-- Facebook sharing -->
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="{{ isset($title) ? $title . ' | ' : '' }}{{ config('app.name') }}" />
    <!-- /Facebook sharing -->

    <meta name="robots" content="all,follow">

    <link rel="icon" href="{{ asset('images/' . settings('site_favicon')) }}" type="image/x-icon">
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/images/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/images/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    --}}
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    @vite('resources/css/app.css')

    @livewireStyles

    @stack('styles')

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    @vite('resources/js/app.js')

    @livewireScriptConfig

    {{-- <x-livewire-alert::scripts /> --}}

    @stack('scripts')

</head>

<body class="m-0 antialiased bg-gray-50 text-body">
    <!-- Body Tags -->

    @if (settings('body_tags'))
        {!! settings('body_tags') !!}
    @endif

    {{-- <x-loading-mask /> --}}

    <section class="relative">
        
        <x-header :title="'ZakariaLabib'" />

        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset

        <x-theme.footer />

        {{-- <x-whatsapp /> --}}
        {{-- @livewire('unotifications') --}}

    </section>


</body>

</html>
