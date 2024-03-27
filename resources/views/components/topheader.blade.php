@props(['color' => 'red', 'href' => null])

<div class="px-4 py-2 bg-{{ $color }}-700 text-white">
    <a href="{{ $href ?? '#' }}" class="flex items-center justify-center md:justify-between">
        {{ $slot }}
    </a>
</div>
