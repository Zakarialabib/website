
@props(['size' => '10', 'color' => 'green', 'icon' => 'fas fa-arrow-up', 'position' => 'right', 'url' => '#top'])

<div class="fixed z-[100] bottom-10 {{ $position }}-10 flex justify-center items-center">
    <a href="{{ $url }}" target="_blank" class="shadow-md w-{{ $size }} h-{{ $size }}">
        <i class="{{ $icon }} w-{{ $size }} h-{{ $size }} text-{{ $color }}-600"> </i>
    </a>
</div>
