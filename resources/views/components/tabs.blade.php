@props(['tabs', 'active', 'position' => 'vertical'])

<div x-data="{ activeTab: '{{ $active }}', changeTab(tab) { this.activeTab = tab } }">
    <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
        <div class="flex {{ $position === 'vertical' ? 'flex-col' : 'border-b' }}">
            @foreach ($tabs as $tab)
                <div class="{{ $position === 'vertical' ? 'mb-4' : 'mr-4' }}">
                    <button @click="changeTab('{{ $tab['name'] }}')"
                        :class="{
                            'bg-blue-500 text-white': activeTab === '{{ $tab['name'] }}',
                            'text-gray-500 hover:text-black': activeTab !== '{{ $tab['name'] }}'
                        }"
                        class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300">
                        {{ $tab['name'] }}
                    </button>
                </div>

                <div x-show="activeTab === '{{ $tab['name'] }}'"
                    class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 py-5 {{ $position === 'vertical' ? 'pl-5' : 'p-5' }}"
                    role="tabpanel" aria-labelledby="tabs">
                    {{ $tab['content'] }}
                </div>
            @endforeach
        </div>
    </div>
</div>
