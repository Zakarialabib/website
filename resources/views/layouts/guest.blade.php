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

    <meta name="title" content="{{ $title }}">
    <meta name="keywords" content="tailwindcss, laravel, ui components, blade templates, ui elements, html, css" />
    <meta name="description"
        content="Super simple but elegant Laravel blade-based UI components using TailwindCSS and vanilla Javascript. All for free!" />

    <meta property="og:title" content="{{ $title }}">
    <meta property="og:url" content="/" />
    <meta property="og:locale" content="{{ app()->getLocale() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="{{ $title }}" />
    <meta name="author" content="{{ $title }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta name="theme-color" content="#000000">
    <link rel="manifest" href="manifest.json" />
    <link rel="apple-touch-icon" href="/images/icon-192x192.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="{{ $title }}">

    <meta name="robots" content="all,follow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Source+Code+Pro:wght@300&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">

    <title>{{ $title ?? '' }} | {{ config('app.name', 'BComponents') }} </title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">

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
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>

    @stack('scripts')

    <script>
        Prism.plugins.toolbar.registerButton('copy-to-clipboard', function(env) {
            var linkCopy = document.createElement('a');
            linkCopy.textContent = 'Copy';
            linkCopy.addEventListener('click', function() {
                Prism.plugins.toolbar.copyToClipboard(env);
            });

            return linkCopy;

        });
    </script>

</head>


<body class="text-gray-500/80 bg-white/95 dark:bg-gradient-to-b from-red-900 to-black dark:text-gray-200">
    <nav
        class="w-[280px] z-50 py-6 bg-white/95 border-gray-200 fixed right-0 top-0 h-screen shadow-2xl
            hidden sm:hidden dark:border-gray-800 shadow-blue-300 dark:shadow-gray-800 dark:text-gray-800 overflow-y-scroll navigation">
        <div class="text-right cursor-pointer"
            onclick="animateCSS('.navigation','slideOutRight').then((message) => { hide('.navigation'); });">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline mr-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        @livewire('docs/nav')
    </nav>

    <x-header />

    <div class="sm:max-w-7xl sm:pt-10 pt-5 sm:flex sm:flex-row sm:rtl:flex-row-reverse mx-auto">
        <nav
            class="sm:w-64 sm:fixed h-0 sm:h-screen sm:overflow-y-scroll main-nav sm:pb-44 invisible sm:visible sm:pl-6  border-gray-200 dark:border-gray-800">
            @livewire('docs/nav')
        </nav>

        <div class="w-full text-gray-500/80 dark:text-gray-200 grow sm:ml-64 pb-16">
            <div class="px-10">
                <div class="flex flex-col-reverse sm:flex-row sm:rtl:flex-row-reverse">
                    <div class="grow sm:w-3/4">
                        <h1
                            class="mb-10 text-3xl leading-9 text-gray-500/80 dark:text-gray-200 font-bold tracking-wide">
                            {{ $page_title ?? '' }}
                        </h1>
                        {{ $slot ?? '' }}
                    </div>
                    <div class="sm:w-1/4 sm:block hidden grow-0 mb-8">
                        <nav
                            class="sm:pl-8 sm:rtl:pr-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6  border-gray-200 dark:border-gray-800">
                            <h5 class="mb-3 my-7 font-semibold text-gray-500/80 dark:text-gray-200">Sections</h5>
                            <div class="space-y-2">
                                {{ $side_nav ?? '' }}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
