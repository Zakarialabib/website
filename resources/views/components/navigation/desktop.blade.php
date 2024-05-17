<nav class="hidden md:flex gap-10 justify-end w-full" x-data="{ isDropdownOpen: false }">
    @foreach (getHeaderMenu() as $index => $item)
        @if ($item->type === 'link')
            <a href="{{ $item->url }}" @if ($item->new_window) target="__blank" @endif
                class="text-base font-bold text-red-950 hover:text-red-400 dark:hover:text-red-900 hover:underline focus:underline uppercase">
                @if ($item->icon)
                    <i class="{{ $item->icon }} mr-2"></i>
                @endif
                {{ $item->label }}
            </a>
        @elseif ($item->type === 'dropdown')
            <div class="relative" x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen"
                    class="text-base font-bold text-red-950 hover:text-red-400 dark:hover:text-red-900 hover:underline focus:underline uppercase">
                    @if ($item->icon)
                        <i class="{{ $item->icon }} mr-2"></i>
                    @endif
                    {{ $item->label }}
                    <svg class="w-4 h-4 inline-block ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 13l-5-5h10l-5 5z" />
                    </svg>
                </button>
                <div x-show="isOpen" @click.away="isOpen = false"
                    class="absolute top-full right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                    <a href="{{ $item->parent->url }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                        {{ $item->parent->label }}
                    </a>
                </div>
            </div>
        @elseif ($item->type === 'megamenu')
            <div class="relative" x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen"
                    class="text-base font-bold text-red-950 hover:text-red-300  dark:hover:text-red-900 hover:underline focus:underline uppercase">
                    @if ($item->icon)
                        <i class="{{ $item->icon }} mr-2"></i>
                    @endif
                    {{ $item->label }}
                    <svg class="w-4 h-4 inline-block ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 13l-5-5h10l-5 5z" />
                    </svg>
                </button>
                <div x-show="isOpen" @click.away="isOpen = false"
                    class="absolute top-full left-0 mt-2 w-full bg-white rounded-md shadow-lg z-10">
                    <div class="flex">
                        @foreach ($item->submenu as $subitem)
                            <div class="w-1/4 px-4 py-2">
                                <h3 class="text-lg font-bold mb-2">{{ $subitem->name }}</h3>
                                @foreach ($subitem->submenu as $subsubitem)
                                    <a href="{{ $subsubitem->url }}"
                                        class="block text-gray-700 hover:text-gray-900">{{ $subsubitem->label }}</a>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @elseif ($item->type === 'button')
            <button
                class="text-base font-bold text-red-950 hover:text-red-300  dark:hover:text-red-900 hover:underline focus:underline uppercase">
                @if ($item->icon)
                    <i class="{{ $item->icon }} mr-2"></i>
                @endif
                {{ $item->label }}
            </button>
        @endif
    @endforeach
</nav>
