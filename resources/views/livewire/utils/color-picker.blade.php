<div x-data="{ isOpen: false }" class="relative mt-2">
    <button @click="isOpen = !isOpen" class="w-10 h-10 rounded-full bg-{{ $selectedColor }} cursor-pointer">
        ?
    </button>
    <div x-show="isOpen" @click.away="isOpen = false"
        class="absolute top-0 mt-10 right-0 w-64 p-4 bg-white border border-gray-300 rounded shadow-lg z-30">
        <h3 class="text-lg font-semibold mb-2">{{ $title }}</h3>
        <div class="grid grid-cols-6 gap-4">
            @foreach ($colors as $color)
                <button type="button" class="w-6 h-6 rounded-full bg-{{ $color }}-500 cursor-pointer"
                    wire:click="dispatch({{ $method }}, { color: {{ $color }} })"></button>
            @endforeach
        </div>
        <label for="colorScheme" class="block font-medium mt-4 mb-2">Color Variations:</label>
        <div class="grid grid-cols-6 gap-4">
            @foreach ($colorOptions as $index => $colorOption)
                <div class="relative">
                    <button class="w-6 h-6 rounded-full bg-{{ $selectedColor }}-{{ $colorOption }} cursor-pointer"
                        wire:click="dispatch({{ $method }} , '{{ $selectedColor }}-{{ $colorOption }}')">
                    </button>
                    <span class="text-sm font-medium text-gray-500">{{ $colorOption }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
