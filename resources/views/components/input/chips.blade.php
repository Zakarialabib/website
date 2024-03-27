@props([
    'label' => '',
    'color' => 'blue',
    'class' => '',
    'shade' => 'faint',
    'color_weight' => [
        'faint' => 200,
        'dark' => 500,
    ],
    'text_color_weight' => [
        'faint' => 500,
        'dark' => 50,
    ],
])
<span class="bg-{{ $color }}-200"></span>
<span class="bg-{{ $color }}-300 text-{{ $color }}-500  border-{{ $color }}-500"></span>
<label style="zoom:95%"
    class="text-xs uppercase px-[10px] py-[5px] tracking-widest whitespace-nowrap inline-block rounded-md bg-{{ $color }}-{{ $color_weight[$shade] }} text-{{ $color }}-{{ $text_color_weight[$shade] }} {{ $class }}">
    {{ $label }}
</label>

{{-- 
<x-chips label="pending" shade="dark" color="red" />

<x-chips label="pending" shade="dark" color="yellow" />

<x-chips label="pending" shade="dark" color="green" />

<x-chips label="pending" shade="dark" color="blue" />
--}}
