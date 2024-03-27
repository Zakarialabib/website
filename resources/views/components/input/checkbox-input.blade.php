<div class="w-full py-4" x-data="{ isChecked: @js($model) }">
    <div class="flex items-center gap-6 pb-2">
        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            <input
                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"
                type="checkbox" id="{{ str_replace(' ', '_', $label) }}" name="{{ $label }}"
                x-on:click="isChecked = !isChecked" />
            <label for="{{ str_replace(' ', '_', $label) }}"
                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
        </div>
        <p class="font-bold font-heading text-gray-800">{{ $label }}</p>
    </div>
    <div x-show="isChecked" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-150" class="w-full" x-cloak>
        {{ $slot }}
    </div>
</div>
