@props([
    'name' => 'radio',
    'label' => '',
    'value' => '',
    'checked' => false,
    'required' => false,
    'color' => 'blue',
    'disabled' => false,
])

<div class="flex items-center">
    <input type="radio" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}" @if($required) required @endif
        {{ $checked ? 'checked' : '' }} {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge(['class' => 'form-radio text-' . $color . '-500 bg-' . $color . '-200']) }}>
    <label for="{{ $name }}" class="ml-2">{{ $label }}</label>

    {{ $slot }}

</div>
