@props([
    'label' => '',
    'color' => 'blue',
    'class' => '',
])

<span
    class="bg-{{ $color }}-300 text-{{ $color }}-500 border-{{ $color }}-500"></span>
<label style="zoom:95%"
    class="text-xs uppercase px-[10px] py-[5px] tracking-widest whitespace-nowrap inline-block rounded-md bg-{{ $color }}-500 text-{{ $color }}-50 {{ $class }}">
    {{ $label }}
</label>
