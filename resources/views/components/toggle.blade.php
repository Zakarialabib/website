@props([
    'id' => '',
    'name' => '',
    'label' => '',
    'checked' => false,
    'label_position' => 'left',
    'disabled' => false,
    'color' => 'green',
    'direction' => 'row',
])

<div class="w-full flex flex-{{ $direction }} justify-between flex-wrap my-4 gap-y-4 text-base">
    @if ($label_position === 'left')
        <label class="relative text-inherit" for="{{ $id }}">
            {{ $label ?? '' }}
        </label>
    @endif

    <div class="flex max-w-full flex-row flex-wrap items-center justify-start gap-2 self-stretch">
        <div class="relative inline-block w-10 mr-2 my-auto align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="{{ $name }}" id="{{ $id }}"
                @if ($checked) checked @endif
                @if ($disabled) disabled @endif
                {{ $attributes->merge(['class' => 'form-radio toggle-checkbox absolute block rounded-full bg-white border-4 appearance-none cursor-pointer bg-' . $color . '-600']) }} />
            <label for="{{ $id }}"
                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
        </div>
    </div>

    @if ($label_position === 'right')
        <label class="relative text-inherit" for="{{ $id }}">
            {{ $label ?? '' }}
        </label>
    @endif
</div>
