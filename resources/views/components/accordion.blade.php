@props(['title', 'id' => null, 'open' => 'false', 'icon' => null, 'iconPosition' => 'right'])


<div x-data="{ open: {{ $open }} }" id="{{ $id }}"
    {{ $attributes->merge(['class' => 'w-full my-2 py-5 px-2 rounded-lg group border-solid border-t border-r border-l border-b-2 border-gray-100 shadow-sm ']) }}>
    <div class="flex justify-between items-center text-center py-3 px-2" @click="open = !open">

        @if ($iconPosition === 'left')
            @if ($icon)
                <i class="fas fa-{{ $icon }} mr-2"></i>
            @else
                <svg class="w-4 h-4 mr-2" :class="{ 'transform rotate-180': open }" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            @endif
        @endif
        <div class="text-lg font-bold cursor-pointer">
            {{ $title }}
        </div>
        @if ($iconPosition === 'right')
            @if ($icon)
                <i class="fas fa-{{ $icon }} ml-2"></i>
            @else
                <svg class="w-4 h-4 ml-2" :class="{ 'transform rotate-180': open }" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            @endif
        @endif
    </div>
    <div x-show="open" class="py-3 mt-2" x-transition>
        {{ $slot }}
    </div>
</div>
