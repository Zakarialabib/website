<div x-data="{ isSidebar: false }">
    <header x-data="{ isSticky: true }" x-init="window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY;
        const windowHeight = window.innerHeight;
        const headerHeight = document.querySelector('header').offsetHeight;
        const scrollThreshold = windowHeight * 0.3; // Set the scroll threshold to 30% of the window height
        const scrollDirection = scrollPosition > this.prevScrollPosition ? 'down' : 'up'; // Determine the scroll direction
    
        if (scrollDirection === 'down' && scrollPosition > headerHeight + scrollThreshold) {
            isSticky = false; // Hide the sticky header when scrolling down beyond the threshold
        } else {
            isSticky = true; // Show the sticky header in all other cases
        }
    
        this.prevScrollPosition = scrollPosition; // Store the previous scroll position
    })"
        :class="{
            'fixed top-0 left-0 right-0 z-50 bg-skin-menu/50 backdrop-blur-sm': isSticky,
        }"
        class="w-full top-4" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95">

        <div class="text-gray-500 text-sm font-medium px-9">
            <div class="flex flex-wrap items-center -ml-3.5 -mr-3.5">
                <div class="basis-full px-3.5">
                    <div class="bg-white h-18 rounded-xl px-10 relative z-[1] drop-shadow-xl">
                        <div style="background-image: url({{ asset('images/header/header_bg.jpg') }});background-size: cover;"
                            class="bottom-0 h-18 left-0 opacity-[0.39] rounded-xl absolute top-0 w-full z-[-1]">
                        </div>
                        <div class="items-center flex flex-wrap justify-start">
                            <div>
                                <a href="{{ route('front.index') }}" class="text-sky-500 cursor-pointer">
                                    <img src="{{ asset('images/' . settings('site_logo')) }}" loading="lazy"
                                        class="h-16 align-middle w-auto" alt="{{ settings('site_title') }}"
                                        onerror="this.onerror=null;this.src='{{ asset('images/logo/logo.png') }}';">
                                </a>
                            </div>
                            <div class="hidden md:flex flex-grow justify-center">
                                <ul class="flex flex-wrap">
                                    <x-theme.menu-list placement="header" />
                                </ul>
                            </div>
                            <div class="hidden md:flex gap-4">
                                @if (Auth::check())
                                    <x-dropdown align="right" width="56">
                                        <x-slot name="trigger">
                                            <div class="flex items-center gap-4 text-green-800 px-4 cursor-pointer">
                                                <i class="fa fa-caret-down"></i> {{ Auth::user()->name }}
                                            </div>
                                        </x-slot>

                                        <x-slot name="content">
                                            @if (Auth::user()->hasRole('admin'))
                                                <x-dropdown-link href="{{ route('admin.dashboard') }}">
                                                    {{ __('Dashboard') }}
                                                </x-dropdown-link>

                                                <x-dropdown-link :href="route('admin.settings')">
                                                    {{ __('Settings') }}
                                                </x-dropdown-link>
                                            @else
                                                <x-dropdown-link href="{{ route('front.myaccount') }}">
                                                    {{ __('My account') }}
                                                </x-dropdown-link>
                                            @endif

                                            <div class="border-t border-green-800"></div>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                @else
                                    <x-dropdown align="right" width="56">
                                        <x-slot name="trigger">
                                            <div
                                                class="flex items-center text-black hover:text-green-400 gap-x-2 leading-10 after:absolute after:bottom-[10px] after:left-0 after:bg-white after:transition-transform after:w-full after:origin-left after:scale-x-100 pr-4">
                                                <svg class="ml-2 h-6 w-6 fill-white" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M12 6C10.343 6 9 7.343 9 9C9 10.657 10.343 12 12 12C13.656 12 15 10.657 15 9C15 7.343 13.656 6 12 6ZM12 10C11.447 10 11 9.553 11 9C11 8.448 11.447 8 12 8C12.553 8 13 8.448 13 9C13 9.553 12.553 10 12 10ZM12 0C5.372 0 0 5.372 0 12C0 18.627 5.372 24 12 24C18.627 24 24 18.627 24 12C24 5.372 18.627 0 12 0ZM12 22C6.478 22 2 17.523 2 12C2 6.478 6.478 2 12 2C17.522 2 22 6.478 22 12C22 17.523 17.522 22 12 22Z">
                                                    </path>
                                                    <path
                                                        d="M11 16H13C14.103 16 15 16.896 15 18H17C17 15.791 15.209 14 13 14H11C8.791 14 7 15.791 7 18H9C9 16.896 9.897 16 11 16Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </x-slot>

                                        <x-slot name="content">
                                            {{-- route with anchor login  --}}
                                            <x-dropdown-link href="{{ route('auth.index') }}">
                                                {{ __('Login') }}
                                            </x-dropdown-link>
                                            {{-- route with anchor --}}
                                            <x-dropdown-link href="{{ route('auth.index') }}">
                                                {{ __('Register') }}
                                            </x-dropdown-link>
                                        </x-slot>
                                    </x-dropdown>
                                @endif
                            </div>
                            <button type="button" class="md:hidden ml-auto" @click="isSidebar = !isSidebar">
                                <svg width="30" height="22" viewbox="0 0 20 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 2H19C19.2652 2 19.5196 1.89464 19.7071 1.70711C19.8946 1.51957 20 1.26522 20 1C20 0.734784 19.8946 0.48043 19.7071 0.292893C19.5196 0.105357 19.2652 0 19 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1C0 1.26522 0.105357 1.51957 0.292893 1.70711C0.48043 1.89464 0.734784 2 1 2ZM19 10H1C0.734784 10 0.48043 10.1054 0.292893 10.2929C0.105357 10.4804 0 10.7348 0 11C0 11.2652 0.105357 11.5196 0.292893 11.7071C0.48043 11.8946 0.734784 12 1 12H19C19.2652 12 19.5196 11.8946 19.7071 11.7071C19.8946 11.5196 20 11.2652 20 11C20 10.7348 19.8946 10.4804 19.7071 10.2929C19.5196 10.1054 19.2652 10 19 10ZM19 5H1C0.734784 5 0.48043 5.10536 0.292893 5.29289C0.105357 5.48043 0 5.73478 0 6C0 6.26522 0.105357 6.51957 0.292893 6.70711C0.48043 6.89464 0.734784 7 1 7H19C19.2652 7 19.5196 6.89464 19.7071 6.70711C19.8946 6.51957 20 6.26522 20 6C20 5.73478 19.8946 5.48043 19.7071 5.29289C19.5196 5.10536 19.2652 5 19 5Z"
                                        fill="#8594A5"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50 overflow-y-scroll" x-show="isSidebar"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
        @click.away="isSidebar = false" x-cloak>
        <div class="fixed inset-0 bg-gray-800 opacity-25 transition-opacity"
            x-transition:enter="transition ease-out duration-100" x-transition:leave="transition ease-in duration-100"
            x-on:click="isSidebar = false"></div>
        {{-- <div class="fixed inset-0 bg-gray-800 opacity-25"></div> --}}
        <nav class="relative flex flex-col py-6 px-6 w-full h-full bg-white border-r overflow-y-scroll">
            <div class="flex items-center">
                <a class="mr-auto lg:text-3xl sm:text-xl font-bold font-heading" href="{{ route('front.index') }}">
                    <img class="w-auto h-14" src="{{ asset('images/' . settings('site_logo')) }}"
                        alt="{{ settings('site_title') }}" loading="lazy" />
                </a>
                <button @click="isSidebar = false" type="button">
                    <svg class="h-5 w-5 text-gray-500 cursor-pointer" width="10" height="10" viewbox="0 0 10 10"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.00002 1L1 9.00002M1.00003 1L9.00005 9.00002" stroke="black" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="border-t border-gray-900 py-2"></div>

            {{-- <div class="px-2 my-4">
                <livewire:front.search-box />
            </div>

            <div class="border-t border-gray-900 py-2"></div> --}}

            <ul class="lg:text-3xl sm:text-xl font-bold font-heading mb-4" x-data="{ isCategory: false }">
                <li class="mb-2 hover:underline hover:text-green-500">
                    <button @click="isCategory = !isCategory" type="button">
                        {{ __('Categories') }}
                        <i class="fa fa-angle-down pl-5"></i>
                    </button>
                </li>
                <ul x-show="isCategory" class="py-2 space-y-4 font-semibold font-heading">
                    @foreach (\App\Helpers::getActiveCategories() as $category)
                        <li>
                            <a href="{{ route('front.categories') }}?type={{ $category->name }}"
                                class="text-sans text-sm uppercase  {{ request()->query('type') == $category->name ? 'text-green-400 underline' : '' }}  text-green-800 text-center font-semibold leading-5 font-heading hover:text-gray-800 hover:underline">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </ul>

            <div class="border-t border-gray-900 py-2"></div>

            <ul class="lg:text-3xl sm:text-xl font-bold font-heading mb-4" x-data="{ isProduct: false }">
                <li class="mb-2 hover:underline hover:text-green-500">
                    <button @click="isProduct = !isProduct" type="button">
                        {{ __('Products') }}
                        <i class="fa fa-angle-down pl-5"></i>
                    </button>
                </li>
                <ul x-show="isProduct" class="py-2 space-y-4 font-semibold font-heading">
                    @foreach (\App\Helpers::getActiveProductCategories() as $category)
                        <li>
                            <a href="{{ route('front.catalog') }}"
                                class="text-sans text-sm uppercase  {{ request()->routeIs('front.catalog') ? 'text-green-400 underline' : '' }}  text-green-800 text-center font-semibold leading-5 font-heading hover:text-gray-800 hover:underline">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </ul>

            <div class="border-t border-gray-900 py-2"></div>

            <div class="flex justify-between">
                @if (Auth::check())
                    <div class="w-full lg:text-3xl sm:text-xl font-bold font-heading">
                        <div class="py-3">
                            <a href="#" class="hover:text-green-500">
                                {{ Auth::user()->name }}
                            </a>
                        </div>
                        @if (Auth::user()->hasRole('admin'))
                            <div class="py-3">
                                <a class="hover:text-green-500" href="{{ route('admin.dashboard') }}">
                                    {{ __('Dashboard') }}
                                </a>
                            </div>
                            <div class="py-3">
                                <a class="hover:text-green-500" href="{{ route('admin.settings') }} ">
                                    {{ __('Settings') }}
                                </a>
                            </div>
                        @else
                            <div class="py-3">
                                <a class="hover:text-green-500" href="{{ route('front.myaccount') }}">
                                    {{ __('My account') }}
                                </a>
                            </div>
                        @endif
                    </div>
                @else
                    <div class="border-t border-gray-900 py-2"></div>
                    <div class="w-full lg:text-3xl sm:text-xl font-bold font-heading">
                        <div class="py-3">
                            <a class="hover:text-green-500" href="{{ route('auth.index') }}"
                                x-on:click.prevent="isTab = 'login'">{{ __('Login') }}
                            </a>
                        </div>
                        {{ __('or') }}
                        <div class="py-3">
                            <a class="hover:text-green-500" href="{{ route('auth.index') }}"
                                x-on:click.prevent="isTab = 'register'">
                                {{ __('Register') }}</a>
                        </div>
                    </div>
                @endif
            </div>
        </nav>
    </div>
</div>
