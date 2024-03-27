@props([
    'header',
    'class' => '',
    'striped' => null,
    'divided' => null,
    'divider' => 'thin',
    'has_shadow' => null,
    'compact' => null,
    'hover_effect' => null,
])

@php
    $class = $class . 
        ($striped ? ' table-striped' : '') .
        ($divided ? ' table-divided' : '') .
        ($divider === 'thin' ? ' divider-thin' : '') .
        ($has_shadow ? ' shadow' : '') .
        ($compact ? ' table-compact' : '') .
        ($hover_effect ? ' hover:shadow-lg' : '');
@endphp

<div class="my-5 p-5 bg-white text-black text-base rounded-lg overflow-x-auto overflow-y-auto relative">
    <table {{ $attributes->merge(['class' => 'border-collapse table-auto w-full whitespace-no-wrap relative ' . $class]) }}>
        <x-table.thead class="text-black">
            {{ $header }}
        </x-table.thead>

        {{ $slot }}

    </table>
</div>
