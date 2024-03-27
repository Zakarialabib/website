@props([
    'type' => 'button', // button or submit
    'href' => '#', // if type is null
    'color' => 'primary', // primary color by default
    'size' => 'md', // default size is medium
    'radius' => 'medium', // default border radius
    'name' => null, // button name attribute
    'disabled' => false, // button disabled state
    'class' => '', // additional classes
    'icon' => null, // icon name (optional)
    'icon_position' => 'left', // icon position (left or right)
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

    $classes =
        'inline-flex items-center px-6 py-4 font-semibold uppercase tracking-widest transition ease-in-out duration-150 rounded-lg disabled:opacity-25 ' .
        $colorClasses[$color];
    $classes .= ' ' . $class;

    $sizeClasses = [
        'sm' => 'text-sm px-4 py-2',
        'md' => 'text-md px-6 py-4',
        'lg' => 'text-lg px-8 py-6',
        'xl' => 'block text-lg px-10 py-6',
    ];

    $classes .= ' ' . ($sizeClasses[$size] ?? $sizeClasses['md']);

    $radiusClasses = [
        'small' => 'rounded-sm',
        'medium' => 'rounded-md',
        'large' => 'rounded-lg',
    ];
    $classes .= ' ' . ($radiusClasses[$radius] ?? $radiusClasses['medium']);

    $iconClasses = $icon_position === 'right' ? 'ml-4' : 'mr-4';
@endphp

@if ($type === 'submit' || $type === 'button')
    <button {{ $attributes->merge(['type' => $type, 'class' => $classes]) }}
        @if ($disabled) disabled @endif>
        @if ($icon && $icon_position === 'left')
            <i class="fa fa-{{ $icon }} {{ $iconClasses }}"></i>
        @endif
        {{ $slot }}
        @if ($icon && $icon_position === 'right')
            <i class="fa fa-{{ $icon }} {{ $iconClasses }}"></i>
        @endif
    </button>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}
        @if ($disabled) disabled @endif>
        @if ($icon && $icon_position === 'left')
            <i class="fa fa-{{ $icon }} {{ $iconClasses }}"></i>
        @endif
        {{ $slot }}
        @if ($icon && $icon_position === 'right')
            <i class="fa fa-{{ $icon }} {{ $iconClasses }}"></i>
        @endif
    </a>
@endif
