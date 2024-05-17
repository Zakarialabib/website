@props([
    'color' => 'primary', // primary color by default
    'href' => null,
    'icon' => null,
    'icon_position' => 'left',
    'iconClasses' => null,
    'title' => null,
])

@php
    $colorClasses = [
        'primary' =>
            'bg-indigo-500 text-white hover:bg-indigo-800 focus:ring-indigo-500 active:bg-indigo-600 focus:outline-none focus:border-indigo-600',
        'secondary' =>
            'bg-gray-400 text-white hover:bg-gray-600 focus:ring-gray-600 active:bg-gray-600 focus:outline-none focus:border-gray-600',
        'info' =>
            'bg-blue-400 text-white hover:bg-blue-600 focus:ring-blue-500 active:bg-blue-600 focus:outline-none focus:border-blue-600',
        'alert' =>
            'bg-yellow-400 text-white hover:bg-yellow-600 focus:ring-yellow-500 active:bg-yellow-600 focus:outline-none focus:border-yellow-600',
        'success' =>
            'bg-green-600 text-white hover:bg-green-800 focus:ring-green-500 active:bg-green-800 focus:outline-none focus:border-green-800',
        'danger' =>
            'bg-red-600 text-white hover:bg-red-800 focus:ring-red-500 active:bg-red-800 focus:outline-none focus:border-red-800',
        'warning' =>
            'bg-orange-500 text-white hover:bg-orange-600 focus:ring-orange-500 active:bg-orange-900 focus:outline-none focus:border-orange-900',
        'primaryOutline' =>
            'bg-transparent border-2 border-indigo-500 text-indigo-500 hover:bg-indigo-500 hover:text-white active:bg-indigo-600 focus:outline-none focus:border-indigo-600 focus:ring ring-indigo-300',
        'secondaryOutline' =>
            'bg-transparent border-2 border-gray-500 text-gray-500 hover:bg-gray-500 hover:text-white active:bg-gray-600 focus:outline-none focus:border-gray-600 focus:ring ring-gray-300',
        'infoOutline' =>
            'bg-transparent border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 focus:outline-none focus:border-blue-600 focus:ring ring-blue-300',
        'successOutline' =>
            'bg-transparent border-2 border-green-500 text-green-500 hover:bg-green-500 hover:text-white active:bg-green-600 focus:outline-none focus:border-green-600 focus:ring ring-green-300',
        'alertOutline' =>
            'bg-transparent border-2 border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white active:bg-orange-600 focus:outline-none focus:border-orange-600 focus:ring ring-orange-300',
        'dangerOutline' =>
            'bg-transparent border-2 border-red-500 text-red-500 hover:bg-red-500 hover:text-white active:bg-red-600 focus:outline-none focus:border-red-600 focus:ring ring-red-300',
        'warningOutline' =>
            'bg-transparent border-2 border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white active:bg-orange-600 focus:outline-none focus:border-orange-600 focus:ring ring-orange-300',
    ];

    $classes = $colorClasses[$color];

    $iconClasses = $icon_position === 'right' ? 'ml-2' : 'mr-2';
@endphp
<div @if ($title) x-data="{ showTooltip: false }" @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @endif>
    @if ($href)
        <a href="{{ $href }}"
            class="inline-flex items-center  justify-center px-4 py-2 transition ease-in-out duration-150 rounded-full disabled:opacity-25 {{ $classes }}">
            @if ($icon && $icon_position === 'left')
                <i class="fa fa-{{ $icon }} {{ $iconClasses }}"></i>
            @endif
            {{ $slot }}
            @if ($icon && $icon_position === 'right')
                <i class="fa fa-{{ $icon }} {{ $iconClasses }}"></i>
            @endif
        </a>
    @else
        <span
            class="inline-flex items-center px-4 py-2 transition ease-in-out duration-150 rounded-full disabled:opacity-25 justify-center {{ $classes }}">
            @if ($icon && $icon_position === 'left')
                <i class="fa fa-{{ $icon }} {{ $iconClasses ?? 'ml-2' }}"></i>
            @endif
            {{ $slot }}
            @if ($icon && $icon_position === 'right')
                <i class="fa fa-{{ $icon }} {{ $iconClasses ?? 'ml-2' }}"></i>
            @endif
        </span>
    @endif
    @if ($title)
        <div x-show="showTooltip"
            class="absolute z-10 w-32 p-2 -mt-12 text-sm leading-tight text-black transition-opacity bg-white rounded shadow-lg opacity-75 left-1/2 transform -translate-x-1/2"
            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90">
            {{ $title }}
        </div>
    @endif
</div>
