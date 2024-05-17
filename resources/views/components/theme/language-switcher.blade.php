@props(['languages' => $languages ?? []])

<div class="self-center relative" x-data="{ langSwitcher: false }">
    <!-- Language switcher button -->
    <a class="bg-transparent rounded-lg p-3 border border-white dark:border-gray-200 text-gray-200 dark:text-gray-500"
        @click="langSwitcher = !langSwitcher">
        {{-- <img src="{{ flagImageUrl(\Illuminate\Support\Facades\App::getLocale()) }}" class="px-2"> --}}
        {{ $language->name }}
        @if (count($languages) > 1)
            <i class="fas fa-caret-down text-black"></i>
        @endif
    </a>
    <!-- Language switcher dropdown -->
    <div x-show="langSwitcher" @click.away="langSwitcher = false"
        class="flex flex-col bg-white text-gray-500 focus:ring focus:ring-offset-2 focus:ring-blue-500 dark:text-gray-400 dark:bg:bg-slate-400 transition-colors float-left py-2 min-w-48 absolute right-0 z-50 mt-2  rounded-md shadow-lg overflow-y-auto"
        x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-cloak>

        <!-- Language options -->
        @foreach ($languages as $index => $language)
            <a class="py-2 px-4 text-sm dark:hover:bg-gray-600 dark:hover:text-gray-200 w-full whitespace-nowrap"
                href="" title="{{ $language }}">
                {{ $language }}
            </a>
        @endforeach
    </div>
</div>

{{-- usage in blade  --}}

{{-- <x-theme.language-switcher :languages="$languages" /> --}}
