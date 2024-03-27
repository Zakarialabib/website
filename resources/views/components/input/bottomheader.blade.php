<div x-data="{ isMenuOpen: false }"
    class="px-6 py-2 bg-gradient-to-l from-green-400 via-green-600 to-green-800 text-white relative shadow-lg" x-cloak>
    <div class="hidden md:flex justify-center">
        <div class="flex items-center justify-center space-x-4">
            @foreach (\App\Helpers::getActiveCategories() as $category)
                <a href="{{ route('front.categories') }}?type={{ $category->name }}"
                    class="lg:text-md md:text-sm text-center uppercase font-semibold font-heading hover:text-green-400 hover:underline">
                    {{ $category->name }}
                </a>
            @endforeach
            <button type="button"
                class="lg:text-md md:text-sm text-center uppercase font-semibold font-heading hover:text-green-400 hover:underline"
                x-on:click="isMenuOpen = !isMenuOpen" @mouseenter="isMenuOpen = true" @click.away="isMenuOpen = false">
                {{ __('Races') }} <small class="inline-block align-middle text-gray-100">&#9660;</small>
            </button>
        </div>
        <div x-show="isMenuOpen" x-transition:enter="transition ease-out duration-300 transform origin-top"
            x-transition:enter-start="opacity-0 -translate-y-4 scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition ease-in duration-200 opacity-0 transform origin-top"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="-translate-y-4 scale-95"
            class="absolute z-10 top-full max-w-screen-xl bg-white w-[35rem] sm:w-[25rem] 
             flex flex-wrap justify-between px-4 gap-4 py-4 text-center rounded-md shadow-lg"
            @click.away="isMenuOpen = false">
            {{-- @foreach (\App\Helpers::getActiveBrands() as $brand)
                <a class="" href="{{ route('front.brandPage', $brand->slug) }}">
                    <p class="mb-3 text-lg font-bold font-heading text-green-900 hover:text-green-600 hover:underline">
                        {{ $brand->name }}
                    </p>
                </a>
            @endforeach --}}
        </div>
    </div>
    <div class="md:hidden">
        @livewire('front.search-box')
    </div>
</div>
