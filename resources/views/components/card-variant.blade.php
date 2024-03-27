<div class="mb-5 bg-white rounded-lg shadow-2xl sm:w-full">
    <a href="{{ $href }}">
        <div class="relative flex justify-center">
            <img class="lg:h-[250px] md:h-[150px] object-fill py-2" src="{{ $image }}" onerror="this.onerror=null; this.remove();" alt="{{ $header }}" loading="lazy" />
        </div>
    </a>
    <div class="px-2 pb-4 text-left">
        @isset($header)
        <h4 class="block text-center mb-2 lg:text-md md:text-sm font-bold font-heading hover:text-move-600">
            {{ $header }}
        </h4>
        @endisset

        <p class="text-center text-xs text-gray-600 mb-2">
            {{ $slot }}
        </p>

        <div class="flex justify-center">
            <a class="my-2 block bg-move-500 hover:bg-move-800 text-center text-white font-bold text-xs py-2 px-4 rounded-md uppercase cursor-pointer tracking-wider hover:shadow-lg transition ease-in duration-300" href="{{ $href }}" wire:loading.attr="disabled">
                {{ __('Read more') }}
            </a>
        </div>
    </div>
</div>