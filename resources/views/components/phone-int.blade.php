<div id="{{ $id }}" class="relative w-full flex flex-col" x-data="{
    intCodes: window.intCodes,
    selectedDialCode: '+44',
    selectedFormat: '999 9999 9999',
    showDropdown: false,
    search: '',
    filteredCodes: [],
    onSelectChangeHandler(dial_code, format) {
        this.selectedDialCode = dial_code;
        this.selectedFormat = format;
        this.showDropdown = false;
    },
    filterCodes() {
        this.filteredCodes = this.intCodes.filter(item => item.name.toLowerCase().includes(this.search.toLowerCase())).slice(0, 10);
    },
    clearSearch() {
        this.search = '';
        this.filterCodes();
    },
    closeDropdown() {
        this.showDropdown = false;
    },

}">

    <div class="relative block">
        <div class="text-xs absolute border border-solid border-b border-gray-300 left-0 z-10 py-3 px-1 cursor-pointer my-auto leading-6 rounded-md"
            @click="showDropdown = !showDropdown" x-text="selectedDialCode"></div>
        <div x-show="showDropdown" class="absolute bg-white border-2 border-dashed rounded z-[99] w-full border-gray-400"
            x-on:click.away="closeDropdown">
            <div class="flex items-center px-4 py-2">
                <i class="material-icons mr-2">search</i>
                <input type="text" placeholder="Search"
                    class="font-poppins relative block py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 placeholder:text-gray-400 border border-solid border-gray-300 text-base rounded-md w-full ps-2"
                    x-model="search" @input="filterCodes">
                <button class="ml-2 text-gray-500" @click="clearSearch" x-show="search" type="button">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <template x-for="{dial_code, name, format} in filteredCodes">
                <div class="cursor-pointer px-4 py-2 hover:bg-gray-200"
                    @click="onSelectChangeHandler(dial_code, format)" x-text="`${dial_code} - ${name}`"></div>
            </template>
        </div>
    </div>

    <input x-mask:dynamic="selectedFormat" id="{{ $attributes['id'] }}" type="text" {{ $attributes->wire('model') }}
        name="{{ $attributes['name'] ?? '' }}'" :placeholder="selectedFormat ?? $attributes['placeholder']"
        class="font-poppins relative block py-3 pl-10 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 placeholder:text-gray-400 border border-solid border-gray-300 text-base rounded-md " />
</div>

<script>
    window.intCodes = [{
            name: "Afghanistan",
            dial_code: "+93",
            code: "AF",
            format: '999 999 9999'
        },
        {
            name: "Albania",
            dial_code: "+355",
            code: "AL",
            format: '999 999 9999'
        },
        {
            name: "Algeria",
            dial_code: "+213",
            code: "DZ",
            format: '9999 999 9999'
        },
        {
            name: "American Samoa",
            dial_code: "+1 684",
            code: "AS",
            format: '999 999 9999'
        },
        {
            name: "Andorra",
            dial_code: "+376",
            code: "AD",
            format: '999 999'
        },
        {
            name: "Angola",
            dial_code: "+244",
            code: "AO",
            format: '999 999 999'
        },
        {
            name: "Anguilla",
            dial_code: "+1 264",
            code: "AI",
            format: '999 999 9999'
        },
        {
            name: "Antigua and Barbuda",
            dial_code: "+1 268",
            code: "AG",
            format: '999 999 9999'
        },
        {
            name: "Argentina",
            dial_code: "+54",
            code: "AR",
            format: '999 999 9999'
        },
        {
            name: "Armenia",
            dial_code: "+374",
            code: "AM",
            format: '999 999 999'
        },
        {
            name: "Aruba",
            dial_code: "+297",
            code: "AW",
            format: '999 9999'
        },
        {
            name: "Azerbaijan",
            dial_code: "+994",
            code: "AZ",
            format: '999 999 99 99'
        },
        {
            name: "Austria",
            dial_code: "+43",
            code: "AT",
            format: '9999 999999'
        },
        {
            name: "Australia",
            dial_code: "+61",
            code: "AU",
            format: '9999 999 999'
        },
        {
            name: "Belgium",
            dial_code: "+32",
            code: "BE",
            format: '99 99 99 99'
        },
        {
            name: "Bahamas",
            dial_code: "+1 242",
            code: "BS",
            format: '999 999 9999'
        },
        {
            name: "Bahrain",
            dial_code: "+973",
            code: "BH",
            format: '9999 9999'
        },
        {
            name: "Bangladesh",
            dial_code: "+880",
            code: "BD",
            format: '99999 999999'
        },
        {
            name: "Barbados",
            dial_code: "+1 246",
            code: "BB",
            format: '999 999 9999'
        },
        {
            name: "Belarus",
            dial_code: "+375",
            code: "BY",
            format: '999 999 99 99'
        },
        {
            name: "Belize",
            dial_code: "+501",
            code: "BZ",
            format: '999 9999'
        },
        {
            name: "Benin",
            dial_code: "+229",
            code: "BJ",
            format: '99 99 99 99'
        },
        {
            name: "Bermuda",
            dial_code: "+1 441",
            code: "BM",
            format: '999 999 9999'
        },
        {
            name: "Bhutan",
            dial_code: "+975",
            code: "BT",
            format: '99 99 99 99'
        },
        {
            name: "Bolivia",
            dial_code: "+591",
            code: "BO",
            format: '999 999 999'
        },
        {
            name: "Bosnia and Herzegovina",
            dial_code: "+387",
            code: "BA",
            format: '999 999 999'
        },
        {
            name: "Botswana",
            dial_code: "+267",
            code: "BW",
            format: '99 999 999'
        },
        {
            name: "Brazil",
            dial_code: "+55",
            code: "BR",
            format: '(99) 99999-9999'
        },
        {
            name: "British Indian Ocean Territory",
            dial_code: "+246",
            code: "IO",
            format: '999 9999'
        },
        {
            name: "Burkina Faso",
            dial_code: "+226",
            code: "BF",
            format: '99 99 99 99'
        },
        {
            name: "Burundi",
            dial_code: "+257",
            code: "BI",
            format: '99 99 99 99'
        },
        {
            name: "Bulgaria",
            dial_code: "+359",
            code: "BG",
            format: '99 999 9999'
        },
        {
            name: "Croatia",
            dial_code: "+385",
            code: "HR",
            format: '99 9999 999'
        },
        {
            name: "Czech Republic",
            dial_code: "+420",
            code: "CZ",
            format: '999 999 999'
        },
        {
            name: "China",
            dial_code: "+86",
            code: "CN",
            format: '999 9999 9999'
        },
        {
            name: "Cambodia",
            dial_code: "+855",
            code: "KH",
            format: '999 999 999'
        },
        {
            name: "Cameroon",
            dial_code: "+237",
            code: "CM",
            format: '9999 99 99 99'
        },
        {
            name: "Cape Verde",
            dial_code: "+238",
            code: "CV",
            format: '999 99 99'
        },
        {
            name: "Cayman Islands",
            dial_code: "+1 345",
            code: "KY",
            format: '999 999 9999'
        },
        {
            name: "Central African Republic",
            dial_code: "+236",
            code: "CF",
            format: '99 99 99 99'
        },
        {
            name: "Chad",
            dial_code: "+235",
            code: "TD",
            format: '9999 99 99'
        },
        {
            name: "Chile",
            dial_code: "+56",
            code: "CL",
            format: '99 9999 9999'
        },
        {
            name: "Christmas Island",
            dial_code: "+61",
            code: "CX",
            format: '9999 999 999'
        },

        {
            name: "Canada",
            dial_code: "+1",
            code: "CA",
            format: '999 999 9999'
        },
        {
            name: "Colombia",
            dial_code: "+57",
            code: "CO",
            format: '999 999 9999'
        },
        {
            name: "Costa Rica",
            dial_code: "+506",
            code: "CR",
            format: '9999 9999'
        },
        {
            name: "Cuba",
            dial_code: "+53",
            code: "CU",
            format: '99 999999'
        },
        {
            name: "Cyprus",
            dial_code: "+357",
            code: "CY",
            format: '99 999999'
        },
        {
            name: "Denmark",
            dial_code: "+45",
            code: "DK",
            format: '99 99 99 99'
        },
        {
            name: "Djibouti",
            dial_code: "+253",
            code: "DJ",
            format: '99 99 99 99'
        },
        {
            name: "Dominica",
            dial_code: "+1 767",
            code: "DM",
            format: '(999) 999-9999'
        },
        {
            name: "Dominican Republic",
            dial_code: "+1 809",
            code: "DO",
            format: '(999) 999-9999'
        },
        {
            name: "Estonia",
            dial_code: "+372",
            code: "EE",
            format: '9999 9999'
        },
        {
            name: "Ecuador",
            dial_code: "+593",
            code: "EC",
            format: '999 999 9999'
        },
        {
            name: "Egypt",
            dial_code: "+20",
            code: "EG",
            format: '99 999 9999'
        },
        {
            name: "El Salvador",
            dial_code: "+503",
            code: "SV",
            format: '9999 9999'
        },
        {
            name: "Equatorial Guinea",
            dial_code: "+240",
            code: "GQ",
            format: '999 99 99 99'
        },
        {
            name: "Eritrea",
            dial_code: "+291",
            code: "ER",
            format: '99 999 999'
        },
        {
            name: "Eswatini",
            dial_code: "+268",
            code: "SZ",
            format: '99 999 9999'
        },
        {
            name: "Ethiopia",
            dial_code: "+251",
            code: "ET",
            format: '999 999 9999'
        },
        {
            name: "Finland",
            dial_code: "+358",
            code: "FI",
            format: '999 9999999'
        },
        {
            name: "France",
            dial_code: "+33",
            code: "FR",
            format: '999 99 99 99 99'
        },
        {
            name: "Fiji",
            dial_code: "+679",
            code: "FJ",
            format: '999 9999'
        },
        {
            name: "India",
            dial_code: "+91",
            code: "IN",
            format: '99999 99999'
        },
        {
            name: "Italy",
            dial_code: "+39",
            code: "IT",
            format: '999 999 9999'
        },
        {
            name: "Iceland",
            dial_code: "+354",
            code: "IS",
            format: '999 9999'
        },
        {
            name: "Ireland",
            dial_code: "+353",
            code: "IE",
            format: '99 999 9999'
        },

        {
            name: "Japan",
            dial_code: "+81",
            code: "JP",
            format: '99-9999-9999'
        },
        {
            name: "Russia",
            dial_code: "+7",
            code: "RU",
            format: '(999) 999-99-99'
        },

        {
            name: "Mexico",
            dial_code: "+52",
            code: "MX",
            format: '999 999 9999'
        },
        {
            name: "Netherlands",
            dial_code: "+31",
            code: "NL",
            format: '99 9999999'
        },
        {
            name: "Norway",
            dial_code: "+47",
            code: "NO",
            format: '999 99 999'
        },

        {
            name: "Greece",
            dial_code: "+30",
            code: "GR",
            format: '999 999 9999'
        },
        {
            name: "Germany",
            dial_code: "+49",
            code: "DE",
            format: '9999 9999999'
        },
        {
            name: "Gabon",
            dial_code: "+241",
            code: "GA",
            format: '99 99 99 99'
        },
        {
            name: "Gambia",
            dial_code: "+220",
            code: "GM",
            format: '999 9999'
        },
        {
            name: "Georgia",
            dial_code: "+995",
            code: "GE",
            format: '999 99 99 99'
        },
        {
            name: "Ghana",
            dial_code: "+233",
            code: "GH",
            format: '999 999 9999'
        },
        {
            name: "Gibraltar",
            dial_code: "+350",
            code: "GI",
            format: '9999 9999'
        },
        {
            name: "Portugal",
            dial_code: "+351",
            code: "PT",
            format: '99 999 9999'
        },

        {
            name: "Poland",
            dial_code: "+48",
            code: "PL",
            format: '99 999 99 99'
        },

        {
            name: "Hungary",
            dial_code: "+36",
            code: "HU",
            format: '99 999 9999'
        },
        {
            name: "Romania",
            dial_code: "+40",
            code: "RO",
            format: '9999 999 999'
        },
        {
            name: "Latvia",
            dial_code: "+371",
            code: "LV",
            format: '99 999 999'
        },
        {
            name: "Lithuania",
            dial_code: "+370",
            code: "LT",
            format: '999 99 999'
        },

        {
            name: "Malta",
            dial_code: "+356",
            code: "MT",
            format: '9999 9999'
        },
        {
            name: "Cyprus",
            dial_code: "+357",
            code: "CY",
            format: '99 999999'
        },
        {
            name: "Luxembourg",
            dial_code: "+352",
            code: "LU",
            format: '999 999 999'
        },
        {
            name: "Andorra",
            dial_code: "+376",
            code: "AD",
            format: '999 999'
        },
        {
            name: "Monaco",
            dial_code: "+377",
            code: "MC",
            format: '99 99 99 99'
        },
        {
            name: "Vatican City",
            dial_code: "+379",
            code: "VA",
            format: '999 999 9999'
        },
        {
            name: "Liechtenstein",
            dial_code: "+423",
            code: "LI",
            format: '999 9999'
        },
        {
            name: "New Zealand",
            dial_code: "+64",
            code: "NZ",
            format: '99 999 9999'
        },
        {
            name: "Switzerland",
            dial_code: "+41",
            code: "CH",
            format: '99 999 99 99'
        },
        {
            name: "Sweden",
            dial_code: "+46",
            code: "SE",
            format: '99-999 99 99'
        },
        {
            name: "Spain",
            dial_code: "+34",
            code: "ES",
            format: '999 99 99 99'
        },
        {
            name: "South Africa",
            dial_code: "+27",
            code: "ZA",
            format: '99 999 9999'
        },
        {
            name: "Slovenia",
            dial_code: "+386",
            code: "SI",
            format: '99 999 99 99'
        },
        {
            name: "Slovakia",
            dial_code: "+421",
            code: "SK",
            format: '9999 999 999'
        },
        {
            name: "San Marino",
            dial_code: "+378",
            code: "SM",
            format: '99 99 99 99'
        },
        {
            name: "Singapore",
            dial_code: "+65",
            code: "SG",
            format: '9999 9999'
        },
        {
            name: "Saudi Arabia",
            dial_code: "+966",
            code: "SA",
            format: '99 999 9999'
        },
        {
            name: "South Korea",
            dial_code: "+82",
            code: "KR",
            format: '99 9999 9999'
        },
        {
            name: "Hong Kong",
            dial_code: "+852",
            code: "HK",
            format: '9999 9999'
        },
        {
            name: "United Arab Emirates",
            dial_code: "+971",
            code: "AE",
            format: '99 999 9999'
        },
        {
            name: "Qatar",
            dial_code: "+974",
            code: "QA",
            format: '9999 9999'
        },
        {
            name: "Turkey",
            dial_code: "+90",
            code: "TR",
            format: '999 999 9999'
        },
        {
            name: "United Kingdom",
            dial_code: "+44",
            code: "UK",
            format: '9999 999 9999'
        },
        {
            name: "United States",
            dial_code: "+1",
            code: "US",
            format: '999 999 9999'
        },
    ];
</script>
