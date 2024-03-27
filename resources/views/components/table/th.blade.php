@props(['sortable' => false, 'direction' => null, 'field' => null])

<th
    {{ $attributes->merge(['class' => 'p-3 text-left text-xs font-medium uppercase tracking-wider bg-gray-100 text-black cursor-pointer'])->only('class') }}
>
    @unless ($sortable)
        <span class="flex text-center text-xs font-medium uppercase">{{ $slot }}</span>
    @else
        <div x-data="{ direction: '{{ $direction }}' }">
            <button
                type="button"
                x-on:click="direction = (direction === 'asc') ? 'desc' : 'asc'; $wire.sortingBy('{{ $field }}', direction).live;"
                class="flex items-center gap-4"
            >
                <span>{{ $slot }}</span>
                <i x-show="direction === 'asc'" class="fas fa-sort-up text-blue-500"></i>
                <i x-show="direction === 'desc'" class="fas fa-sort-down text-blue-500"></i>
            </button>
        </div>
    @endunless
</th>