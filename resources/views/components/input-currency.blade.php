@props([
    'id' => null,
    'type' => 'fixed',
    'name' => null,
    'value' => null,
    'disabled' => false,
    'required' => false,
    'placeholder' => null,
])

@php
    $attributes = $attributes
        ->class([
            'z-20 py-3 shadow-sm block w-full ps-12 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 placeholder:text-gray-400 border-gray-300 text-sm capitalize border border-solid rounded-md',
            'disabled:opacity-50' => $disabled,
            'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red-500' => $errors->has(
                $name,
            ),
        ])
        ->merge([
            'id' => $id,
            'name' => $name,
            'value' => $value,
            'disabled' => $disabled,
            'required' => $required,
            'placeholder' => $placeholder,
        ]);
@endphp

<div x-data="{ type: '{{ $type }}', dropdownOpen: false, selectedType: '{{ $type }}' }" class="relative w-11/12">

    <div
        class="flex absolute inset-y-0 left-0 items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
        @if ($type === 'dropdown')
            <div class="z-10 py-2 px-2 relative " x-on:click="dropdownOpen = !dropdownOpen">
                <div class="flex-shrink-0 inline-flex items-center text-sm font-medium text-center">
                    <i x-show="selectedType == 'percentage'" class="w-4 h-4 fas fa-percent text-gray-500"></i>
                    <i x-show="selectedType == 'fixed'" class="w-4 h-4 fas fa-pound-sign text-gray-500"></i>
                    <span class="text-gray-500" x-show="selectedType == 'dropdown'">
                        <i class="w-4 h-4 fas fa-pound-sign"></i>
                        <i class="w-4 h-4 fas fa-caret-down"></i>
                    </span>
                </div>
                <div x-show="dropdownOpen" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95" x-on:click.outside="dropdownOpen = false"
                    class="absolute z-50 mt-2 bg-white divide-y divide-gray-100 rounded-lg shadow w-36 right-0 origin-top-right">

                    <div class="inline-flex w-full py-2 text-sm text-gray-700 gap-x-4 cursor-pointer"
                        x-on:click="selectedType = 'percentage'" x-transition>
                        <i class="fas fa-percent mx-2"></i>
                        Percentage
                    </div>

                    <div class="inline-flex w-full py-2 text-sm text-gray-700 gap-x-4 cursor-pointer"
                        x-on:click="selectedType = 'fixed'" role="menuitem" x-transition>
                        <i class="fas fa-pound-sign mx-2"></i> Fixed
                    </div>
                </div>
            </div>
        @else
            <div class="z-10 py-2 px-2 relative pointer-events-none">
                <i x-show="type == 'percentage'" class="w-4 h-4 fas fa-percent text-gray-500"></i>
                <i x-show="type == 'fixed'" class="w-4 h-4 fas fa-pound-sign text-gray-500"></i>
            </div>
        @endif
    </div>
    <input type="number" {{ $attributes }} />
</div>
