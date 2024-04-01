<div x-data="PhoneSelect()">
    <div class="flex items-center">
        <!-- Country Prefix Selector -->
        <div class="flex flex-col w-1/3 relative">
            <button type="button" @click="toggle"
                class="block bg-white border border-gray-300 rounded-l-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                <span class="truncate flex items-center"><img x-bind:src="`${selectedIcon}`"
                        class="inline mr-2 h-4 rounded-sm" /><span x-text="selectedPrefix"></span></span>
            </button>
            <ul x-show="open" @click.away="open = false"
                class="absolute z-10 mt-1 w-full max-w-full bg-white shadow-lg max-h-80 rounded-md text-base ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm overflow-x-hidden"
                tabindex="-1" role="listbox" aria-labelledby="listbox-label" style="opacity: 1;">

                <li class="text-gray-900 cursor-default select-none relative py-2 px-3">
                    <input type="search" name="countrySearch" id="countrySearch" autocomplete="off"
                        class="focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md h-10 p-2"
                        placeholder="Search a country" @keyup="filterCountry">
                </li>
                <hr>

                <template x-for="(data, index) in countries" :key="index">
                    <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 flex items-center hover:bg-gray-50 transition"
                        @click="handlePhoneSelection(data[1], data[2])">
                        <img :src="getImage(data[1])" :alt="data[0]" class="inline mr-2 h-4 rounded-sm"><span
                            class="font-normal truncate" x-text="data[2]"></span>
                    </li>
                </template>
            </ul>
        </div>

        <!-- Phone Input -->
        <div class="flex flex-col w-2/3">
            <input type="text" placeholder="Enter phone number"
                class="w-full block bg-white border border-gray-300 rounded-l-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
    </div>
</div>


@push('scripts')
    <script>
        function PhoneSelect() {
            return {
                selectedValue: "",
                selectedIcon: "",
                selectedPrefix: 'Select Country',
                open: false,
                countries: [], // define an initial empty array
                toggle() {
                    this.open = !this.open;
                    document.getElementById("countrySearch").focus();
                },
                init() {
                    this.countries = countries.slice(0, 10);
                },
                filterCountry() {
                    var box = document.getElementById('countrySearch');
                    var searchText = box.value.toLowerCase();
                    var filtered = countries.filter(country =>
                        country[0].toLowerCase().includes(searchText) ||
                        country[2].includes(searchText)
                    );
                    this.countries = filtered.slice(0, 10);
                },
                getImage(imageToken) {
                    base = '../vendor/country-flags';
                    return base + '/' + imageToken + '.svg';
                },
                handlePhoneSelection(selectionKey, selectionValue) {
                    this.selectedValue = selectionKey;
                    this.selectedIcon = this.getImage(selectionKey);
                    this.selectedPrefix = '+' + selectionValue;
                    this.toggle();
                }
            };
        }
    </script>
@endpush
