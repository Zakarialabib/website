@props(['options', 'route'])
<div class="w-full pb-5 px-4 mx-auto relative">
    <div class="flex justify-center overflow-x-scroll gap-4 py-4 relative">
        @foreach ($this->categories as $category)
            <div class="inline-flex">
                <a href="{{ route('front.categories') }}?c={{ $category->id }}"
                    class="relative w-44 h-44 overflow-hidden focus:outline-none border-2 border-red-600">
                    <div
                        class="absolute top-0 left-0 right-0 bottom-0 rounded-md opacity-75 shadow-lg transform hover:scale-105 transition-transform duration-300 focus:scale-105 focus:outline-none">
                        <div class="absolute inset-0 flex items-center justify-center text-center">
                            <p
                                class="px-4 text-lg uppercase font-extrabold bg-gradient-to-r from-red-600 to-orange-500 bg-clip-text text-transparent">
                                {{ $category->name }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
