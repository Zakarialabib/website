@props([
    'size' => 'lg',
    'color' => 'text-gray-500', // Default color
    'icon' => null,
    'iconSize' => null,
])

@php
    switch ($size) {
        case 'sm':
            $size = 'h-6 w-6';
            break;
        case 'md':
            $size = 'h-10 w-10';
            break;
        case 'lg':
            $size = 'h-14 w-14';
            break;
        case 'xl':
            $size = 'h-24 w-24';
            break;
        case 'xxl':
            $size = 'h-36 w-36';
            break;
        default:
            $size = 'h-14 w-14';
            break;
    }
@endphp

@if ($icon)
    <div class="inline-block bw-spinner {{ $color }}">
        <i class="fa fa-{{ $icon }} animate-spin {{ $iconSize }}"></i>
    </div>
@else
    <svg class="animate-spin inline-block bw-spinner {{ $size }} {{ $color }}"
        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
        </circle>
        <path class="opacity-75" fill="currentColor"
            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
        </path>
    </svg>
@endif
