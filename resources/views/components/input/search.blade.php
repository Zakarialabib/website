<div x-data="{ searchBox: {{ $searchBox ? 'true' : 'false' }} }" class="relative w-full" @click.away="searchBox = false">
    <div class="flex items-center max-w-md rounded-lg">
        <button type="button" @click="searchBox = !searchBox"
            class="flex items-center justify-center w-10 h-10 text-gray-100 rounded-l-lg focus:outline-none">
            <i class="fa fa-search mr-5 text-gray-100"></i>
        </button>
        <input type="text" placeholder="{{ __('Search') }}" autocomplete=""
            class="w-full border-0 focus:ring-transparent bg-gray-100 text-gray-900 text-xs focus:outline-none py-2 mr-4 rounded-md">
        <button type="button"
            class="h-full absolute z-20 top-0 right-0 flex items-center px-2 ml-3 text-gray-800 focus:outline-none">
            <i class="fa fa-times mr-4 text-gray-900"></i>
        </button>
    </div>
    @if (!empty($search))
        <div x-transition:enter="transition-all duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition-all"
            x-transition:leave-start="opacity-25" x-transition:leave-end="opacity-0 hidden"
            class="absolute top-0 left-0 w-full mt-12 bg-white rounded-md shadow-xl overflow-y-auto max-h-52 z-50">
            {{--  --}}
        </div>
    @endif
</div>
