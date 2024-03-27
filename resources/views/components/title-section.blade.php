@props(['title'])

<div {{ $attributes->merge(['class' => 'block w-full']) }}>
    <h2 class="relative inline-block text-2xl font-bold text-left text-blue-500 underline">
        {{ $title }}
    </h2>
 
</div>
