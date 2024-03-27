<div x-data="{ showSettings: false }"
    class="fixed bg-white pointer top-36 ltr:right-0 rtl:left-0 z-50 transition duration-150 ease-in-out bg-opacity-75">
    <button type="button" x-on:click="showSettings = true" class="shadow-md py-3 px-5">
        <i class="fas fa-cog w-5 h-5 text-indigo-500"></i>
    </button>
    <div class="fixed inset-0 overflow-hidden z-50" style="display:none" x-on:click.away="showSettings = false"
        x-show="showSettings" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-x-4"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform translate-x-4" x-close-on-escape="showSettings = false">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute inset-0" aria-hidden="true" x-on:click="showSettings = false"></div>
            <div class="absolute top-10 right-0 pl-10 max-w-full flex">
                <div class="w-screen max-w-md">
                    <div class="flex flex-col bg-white shadow-xl overflow-y-scroll">
                        <div class="py-2 px-4">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-medium text-gray-900">{{ __('Settings') }}</h2>
                                <div class="ml-3 h-7 flex items-center">
                                    <button x-on:click="showSettings = false"
                                        class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        <span class="sr-only">{{ __('Close panel') }}</span>
                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 py-3 px-4">
                            <div class="grid gap-3 md:grid-col-2 px-3 space-y-2">
                                <div class="flex items-center space-x-2">
                                    <x-label for="show_email" :value="__('Show Email')" />
                                    <div
                                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input type="checkbox" id="show_email" checked="{{ settings('show_email') }}"
                                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                        <label id="show_email"
                                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <x-label for="show_address" :value="__('Show Address')" />
                                    <div
                                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input type="checkbox" id="settings('show_address')"
                                            checked="{{ settings('show_address') }}"
                                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                        <label id="show_address"
                                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>

                                </div>
                                <div class="flex items-center space-x-2">
                                    <x-label for="show_order_tax" :value="__('Show Order Tax')" />
                                    <div
                                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input type="checkbox" id="settings('show_order_tax')"
                                            checked="{{ settings('show_order_tax') }}"
                                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                        <label id="show_order_tax"
                                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>

                                </div>
                                <div class="flex items-center space-x-2">
                                    <x-label for="show_discount" :value="__('Show Discount')" />
                                    <div
                                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input type="checkbox" id="settings('show_discount')"
                                            checked="{{ settings('show_discount') }}"
                                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                        <label id="show_discount"
                                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>

                                </div>
                                <div class="flex items-center space-x-2">
                                    <x-label for="show_shipping" :value="__('Show Shipping')" />
                                    <div
                                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input type="checkbox" id="show_shipping"
                                            checked="{{ settings('show_shipping') }}"
                                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                        <label id="show_shipping"
                                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
