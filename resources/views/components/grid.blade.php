<div
    {{ $attributes->merge(['class' => 'sm:grid sm:grid-cols-3 md:grid-cols-3 sm:gap-5 gap-y-6 gap-x-4 py-4 items-center ']) }}>
    {{ $slot }}
</div>
