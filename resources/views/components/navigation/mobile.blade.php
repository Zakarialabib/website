<nav class="uppercase grid gap-y-4 py-2" x-data="{ isMobileDropdown: false }">
    @foreach (Helpers::getFooterSection2Menu() as $index => $item)
        <a href="{{ $item['url'] }}" @if ($item['new_window']) target="__blank" @endif
            class="px-3 flex items-center justify-center rounded-md h">
            <span
                class="ml-3 text-base font-semibold text-gray-900  hover:text-blue-600 hover:underline ">
                {{ $item['label'] }}
            </span>
        </a>
    @endforeach
</nav>
