@props([
    'options' => [],
    'required' => false,
    'disabled' => false,
    'multiple' => false,
    'id' => null,
    'name' => null,
    'value' => null,
    'label' => null,
    'error' => null,
    'placeholder' => __('Select an option'),
])

@php
    $id = Str::random(10);

    $options = is_array($options) ? $options : json_decode($options, true);
@endphp

<div wire:ignore>
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">
        {{ $label }}
        @if ($required)
            <span class="text-red-500">*</span>
        @endif
    </label>
    <select id="{{ $id }}" name="{{ $name }}" data-placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' => 'select2 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm']) }}
        @if ($required) required @endif @if ($disabled) disabled @endif
        @if ($multiple) multiple @endif>
        @if (!$multiple)
            <option value="">{{ $placeholder }}</option>
        @endif
        @foreach ($options as $option)
            <option value="{{ $option['value'] }}" @if ($option['value'] == $value) selected @endif>
                {{ $option['label'] }}</option>
        @endforeach
    </select>
    @if ($error)
        <p class="mt-2 text-sm text-red-600" id="{{ $id }}">{{ $error }}</p>
    @endif
</div>

@once
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
    @endpush

    @push('styles')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endpush
@endonce

@script
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $('.select2').select2({
                allowClear: true,
                dropdownAutoWidth: true,
                width: '100%',
            }).on('change', function(e) {
                if (e.target.hasAttribute('multiple')) {
                    @this.set(
                        '{{ $attributes->whereStartsWith('wire:model')->first() }}',
                        Array.from(e.target.options).filter(option => option.selected).map(option => option.value)
                    )
                } else {
                    @this.set('{{ $attributes->whereStartsWith('wire:model')->first() }}', e.target.value);
                }
            });
        });
    </script>
@endscript
