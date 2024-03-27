@props([
    'name' => 'checkbox',
    'label' => '',
    'value' => '',
    'color' => 'blue',
    'checked' => false,
    'required' => false,
    'disabled' => false,
])

<div class="flex items-center">
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}" @if($required) required @endif
        {{ $checked ? 'checked' : '' }} {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge(['class' => 'form-checkbox text-' . $color . '-500 bg-' . $color . '-200']) }}>
    <label for="{{ $name }}" class="ml-2">{{ $label }}</label>

    {{ $slot }}
</div>
