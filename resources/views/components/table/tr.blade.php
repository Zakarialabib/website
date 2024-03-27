<tr {{ $attributes->merge([
    'class' => 'border-b border-white text-sm',
]) }}>
    {{ $slot }}
</tr>