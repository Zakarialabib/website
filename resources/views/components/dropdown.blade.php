@props([
    'align' => 'left',
    'width' => '48',
    'contentClasses' => 'py-1 bg-white',
    'name' => '',
    'placeholder' => '',
    'onChange' => '',
    'data' => [],
    'value' => '',
    'label' => '',
    'required' => false,
    'selected_value' => '',
])

@php
    $alignmentClasses = match ($align) {
        'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
        'top' => 'origin-top',
        default => 'ltr:origin-top-right rtl:origin-top-left end-0',
    };

    $width = match ($width) {
        '48' => 'w-48',
        '64' => 'w-64',
        'full' => 'w-full',
        default => 'w-full',
    };
@endphp

<div class="relative" x-data="{ open: false, selected: '{{ $selected_value }}', search: '' }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        <input type="text" name="{{ $name }}" placeholder="{{ $placeholder }}" x-model="selected"
            class="block {{ $width }} py-3 ps-4 border rounded-md focus:outline-none focus:ring focus:ring-blue-300 placeholder-gray-400"
            @change="{{ $onChange }}" @if ($required) required @endif />
    </div>

    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
        style="display: none;" @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            <div class="overflow-y-auto max-h-60">
                @foreach ($data as $item)
                    <div class="p-2 hover:bg-gray-100 cursor-pointer text-gray-800"
                        @click="selected = '{{ $item->value }}'; {{ $onChange ? $onChange . '(selected)' : '' }}">
                        {{ $item->label }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
