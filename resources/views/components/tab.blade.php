@props(['name'])

<div class="mr-4">
    <button @click="$parent.changeTab('{{ $name }}')"
        :class="{ 'bg-blue-500 text-white': $parent
            .activeTab === '{{ $name }}', 'text-gray-500 hover:text-black': $parent
                .activeTab !== '{{ $name }}' }"
        class="py-2 px-4 font-semibold cursor-pointer hover:text-blue-500">
        {{ $name }}
    </button>
</div>

<div x-show="$parent.activeTab === '{{ $name }}'" class="p-5">
    {{ $slot }}
</div>
