@props(['color' => 'warning'])

@php
    $classes = match ($color) {
        'primary' => 'bg-gradient-to-r from-blue-800 via-violet-900 to-blue-800 text-white drop-shadow text-white',
        'secondary' => 'bg-gray-100 drop-shadow text-gray-500',
        'info' => 'bg-blue-100 drop-shadow text-blue-500',
        'alert' => 'bg-yellow-100 drop-shadow text-yellow-500',
        'success' => 'bg-green-100 drop-shadow text-green-500',
        'danger' => 'bg-red-100 drop-shadow text-red-500',
        'warning' => 'bg-orange-100 drop-shadow text-orange-500',
        'black' => 'bg-gray-900 drop-shadow text-white',
        default => 'bg-gray-100 drop-shadow text-gray-500', // Default class if color doesn't match any case
    };
@endphp

<div
    {{ $attributes->merge(['class' => "max-w-full inline-flex text-base flex-row items-center justify-center self-stretch gap-2 rounded-lg px-6 py-2 $classes"]) }}>
    <p class="rounded-sm px-2">
        <i class="fas fa-info-circle text-{{ $color === 'black' ? 'white' : $color }}-800 text-lg"></i>
    </p>
    <div class="block w-full text-{{ $color === 'black' ? 'white' : $color }}-800 text-semibold">
        {{ $slot }}
    </div>
</div>
