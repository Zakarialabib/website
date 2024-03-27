@props([
    'label' => '',
    'name' => '',
])

@php
    $id = $name ? str_replace(' ', '', $name) : uniqid();
@endphp

<div>
    @if ($label)
        <label for="{{ $id }}" class="block font-semibold mb-1">{{ $label }}</label>
    @endif

    <div class="rounded-md shadow-sm" x-data="{
        value: @entangle($attributes->wire('model')).live,
        isFocused() { return document.activeElement !== this.$refs.trix },
        setValue() { this.$refs.trix.editor.loadHTML(this.value) },
    }" x-init="setValue();
    $watch('value', () => isFocused() && setValue())"
        x-on:trix-change="value = $event.target.value" {{ $attributes->whereDoesntStartWith('wire:model.live') }}
        wire:ignore>
        <input id="x" type="hidden">
        <trix-editor x-ref="trix" input="x"
            class="bg-white form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></trix-editor>
    </div>

    @error($name)
        <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>

<link href="https://cdn.jsdelivr.net/npm/trix@2.0.0/dist/trix.css" rel="stylesheet">

@script
    <script src="https://cdn.jsdelivr.net/npm/trix@2.0.0/dist/trix.js" defer></script>
@endscript
