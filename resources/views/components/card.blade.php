@props(['color' => 'white', 'href' => null, 'header' => null, 'footer' => null])

<div
    {{ $attributes->merge(['class' => $color == 'white' || $color == 'black' ? "shadow-md hover:shadow-xl bg-$color text-gray-800 font-serif py-10 flex items-center justify-center flex-col transition-all overflow-hidden sm:rounded-md px-6 mx-auto" : "shadow-md hover:shadow-xl bg-$color-500 text-gray-800 font-serif py-10 flex items-center justify-center flex-col transition-all overflow-hidden sm:rounded-md px-6 mx-auto"]) }}>

    @isset($header)
        <div class="p-4">
            @if ($href)
                <a href="{{ $href ?? '#' }}"
                    class="text-sm md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl text-center uppercase tracking-wider leading-tight font-semibold text-gray-900">
                    {{ $header }}
                </a>
            @else
                <div
                    class="text-sm md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl text-center uppercase tracking-wider leading-tight font-semibold text-gray-900">
                    {{ $header }}
                </div>
            @endif
        </div>
    @endisset

    <div class="w-full leading-normal text-gray-600 tracking-wide font-light">
        {{ $slot }}
    </div>

    @isset($footer)
        <div class="w-full leading-normal text-gray-600 tracking-wide font-light">
            {{ $footer }}
        </div>
    @endisset
</div>
