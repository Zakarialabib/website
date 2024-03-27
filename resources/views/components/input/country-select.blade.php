<div x-data="CountrySelect()">
    <div class=" flex flex-col justify-center items-center">
        <input type="hidden" {{ $attributes }} x-bind:value="selectedValue" />
        <div class="w-full mt-auto">
            <div>
                <div class="mt-1 relative">
                    <button type="button" @click="toggle"
                        class="block bg-white relative w-full border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                        <span class="truncate flex items-center"><img x-bind:src="`${selectedIcon}`"
                                class="inline mr-2 h-4 rounded-sm" /><span x-text="selectedText"></span></span>
                        <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none"><svg
                                class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></span>
                    </button>
                    <ul x-show="open" @click.away="open = false"
                        class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-80 rounded-md text-base ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                        tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                        aria-activedescendant="listbox-option-3" style="opacity: 1;">
                        <div class="sticky top-0 z-10 bg-white">
                            <li class=" text-gray-900 cursor-default select-none relative py-2 px-3">
                                <input type="search" name="countrySearch" id="countrySearch" autocomplete="off"
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md h-10 p-2"
                                    placeholder="Search a country" @keyup="filterCountry">
                            </li>
                            <hr>
                        </div>
                        <div
                            class="max-h-64 scrollbar scrollbar-track-gray-100 scrollbar-thumb-gray-300 hover:scrollbar-thumb-gray-600 scrollbar-thumb-rounded scrollbar-thin overflow-y-scroll">

                            <template x-for="(data, index) in countries" :key="index">

                                <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 flex items-center hover:bg-gray-50 transition"
                                    id="listbox-option-0" role="option"
                                    @click="handleCountrySelection(data.value, data.title)">
                                    <img :src="getImage(data.value)" :alt="data.value"
                                        class="inline mr-2 h-4 rounded-sm"><span class="font-normal truncate"
                                        x-text="data.title"></span>
                                </li>
                            </template>

                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function CountrySelect() {
            return {
                selectedValue: "",
                selectedIcon: "",
                selectedText: 'Select Country',
                open: false,
                toggle() {
                    this.open = !this.open;
                    document.getElementById("countrySearch").focus();
                },
               
                filterCountry() {
                    var box = document.getElementById('countrySearch');
                    var filtered = countries.filter(country =>
                        country.title && country.title.toLowerCase().startsWith(box.value.toLowerCase())
                    );
                    this.countries = filtered.slice(0, 10);
                },

                getImage(imageToken) {
                    base = '../vendor/country-flags';
                    return base + '/' + imageToken + '.svg';
                },
                handleCountrySelection(selectionKey, selectionValue) {
                    this.selectedValue = selectionKey;
                    this.selectedIcon = this.getImage(selectionKey);
                    this.selectedText = selectionValue;
                    this.$wire.set('{{ $attributes['wire:model'] }}', selectionValue);
                    this.toggle();
                }
            };
        }
    </script>
@endpush
