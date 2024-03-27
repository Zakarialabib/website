@props(['name' => null, 'placeholder' => null, 'label' => null, 'required' => false, 'rows' => 3])

@if ($label)
    <x-label for="{{ $name }}" :value="$label" />
@endif

<div class="flex rounded-md shadow-sm">
    <textarea name="{{ $name }}" {{ $attributes->whereDoesntStartWith('wire:model') }}
        placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }} rows="{{ $rows }}"
        {{ $attributes->merge(['class' => 'form-textarea flex-1 border-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5']) }}>
    </textarea>
</div>
