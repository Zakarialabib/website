<div>
    <div class="flex w-full h-full" x-data="{
        isHeaderOpen: true,
        isFooterOpen: true,
        isMenu: true,
        isColor: true,
        isBreadcrumb: true,
        isLoader: true,
        showTooltip: false,
        isCardContent: false,
        isListItems: false,
        isTextContent: false,
        isVideo: false,
        isAccordionItems: false,
        isTabItems: false,
    }">

        <div class="w-[35%]">

            <div class="p-2 border mb-4">
                <div class="flex justify-between mb-2">
                    <label for="headerLayout" class="block font-medium mb-2">Header Settings:</label>
                    <button @click="isHeaderOpen = !isHeaderOpen">
                        <i class="fa fa-caret-down"
                            :class="{ 'fa-caret-up': isHeaderOpen, 'fa-caret-down': !isHeaderOpen }" aria-hidden="true">
                        </i>
                    </button>
                </div>
                <div x-show="isHeaderOpen" class="py-4">
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label for="numberOfColumns" class="block font-medium mb-2">Number of columns:</label>
                            <select id="numberOfColumns" name="numberOfColumns"
                                wire:model="headerLayout.numberOfColumns"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div>
                            <label for="logoPosition" class="block font-medium mb-2">Logo Position:</label>
                            <select id="logoPosition" name="logoPosition" wire:model="headerLayout.logoPosition"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="left">Left</option>
                                <option value="center">Center</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                        <div>
                            <label for="headerHeight" class="block font-medium mb-2">Header Height:</label>
                            <input type="number" id="headerHeight" wire:model="headerLayout.headerHeight"
                                min="10" max="250"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="logoSize" class="block font-medium mb-2">Logo Size:</label>
                            <input type="number" id="logoSize" wire:model="headerLayout.logoSize" min="10"
                                max="100"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="bg-color" class="block font-medium mb-2">Header background color:</label>
                            <input type="color" id="bg-color" wire:model="headerLayout.bg-color" min="10"
                                max="100"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        
                    </div>
                    <div class="my-4">
                        <label for="logoUrl" class="block font-medium mb-2">Logo Upload:</label>
                        <input type="file" id="logoUrl" wire:model="headerLayout.logoUrl"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div class="my-4">
                        <label for="searchIcon" class="block font-medium mb-2">Search Icon if Column layout 3:</label>
                        <div class="flex flex-row space-x-2 items-center">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"
                                    wire:model="headerLayout.hasSearchIcon">
                            </label>
                            <input type="text" id="searchIcon" name="searchIcon" wire:model="searchIcon"
                                placeholder="Search Icon"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <x-button type="button" wire:click="saveHeaderSettings" primary> {{ __('Update') }}</x-button>
                    </div>
                </div>
            </div>
            <div class="p-2 border mb-4">
                <div class="flex justify-between mb-2">
                    <label for="footerLayout" class="block font-medium mb-2">Footer Settings:</label>
                    <button @click="isFooterOpen = !isFooterOpen">
                        <i class="fa fa-caret-down"
                            :class="{ 'fa-caret-up': isFooterOpen, 'fa-caret-down': !isFooterOpen }" aria-hidden="true">
                        </i>
                    </button>
                </div>
                <div x-show="isFooterOpen" class="py-4">
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                    <label for="numberOfColumns" class="block font-medium mb-2">Number of columns:</label>
                    <select id="numberOfColumns" name="numberOfColumns" wire:model="headerLayout.numberOfColumns"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div>
                    
                                        <label for="logoPosition" class="block font-medium mb-2">Logo Position:</label>
                                        <select id="logoPosition" name="logoPosition" wire:model="footerLayout.logoPosition"
                                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            <option value="left">Left</option>
                                            <option value="center">Center</option>
                                            <option value="right">Right</option>
                                        </select>
                    <label for="footerHeight" class="block font-medium mb-2">Footer Height:</label>
                    <input type="number" id="footerHeight" wire:model="footerLayout.footerHeight" min="10"
                        max="250"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                    <label for="backToTop" class="block font-medium mb-2">Back to Top:</label>
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"id="backToTop"
                        wire:model="footerLayout.backToTop">

                </div>
                <div class="w-full flex justify-center">
                    <x-button type="button" wire:click="" primary> {{ __('Update') }}</x-button>
                </div>
            </div>
            <div class="p-2 border mb-4">
                <div class="flex justify-between mb-2">
                    <label for="menuItems" class="block font-medium mb-2">Menu Items:</label>
                    <button @click="isMenu = !isMenu">
                        <i class="fa fa-caret-down" :class="{ 'fa-caret-up': isMenu, 'fa-caret-down': !isMenu }"
                            aria-hidden="true">
                        </i>
                    </button>
                </div>
                <div x-show="isMenu">
                    @foreach ($menuItems as $index => $menu)
                        <div class="mb-4 p-4">

                            <label class="block font-medium">Menu Name:</label>
                            <x-input type="text" id="menuItemLabel{{ $index }}" class="my-2"
                                wire:model="menuItems.{{ $index }}.menuName" />
                            <div x-data="{ order: [] }" x-init="() => {
                                order = JSON.parse('{{ json_encode(array_keys($menu['items'])) }}');
                                let sortable = Sortable.create($refs.menuItemsContainer, {
                                    animation: 150,
                                    onEnd: function(event) {
                                        let itemIds = Array.from(event.item.parentElement.children)
                                            .map((element) => element.getAttribute('data-id'));
                                        order = itemIds;
                                    }
                                });
                            }">
                                <div x-ref="menuItemsContainer">
                                    @foreach ($menu['items'] as $itemIndex => $item)
                                        <div class="border border-gray-300 rounded-md shadow-sm mb-2 p-2"
                                            wire:key="menuItems-{{ $itemIndex }}" data-id="{{ $itemIndex }}"
                                            x-data="{ isMenuOpen{{ $itemIndex }}: true }">
                                            <div class="flex justify-between ">
                                                
                                                <button
                                                    @click="isMenuOpen{{ $itemIndex }} = !isMenuOpen{{ $itemIndex }}">
                                                    <i class="fa fa-caret-down"
                                                        :class="{
                                                            'fa-caret-up': isMenuOpen{{ $itemIndex }},
                                                            'fa-caret-down': !isMenuOpen{{ $itemIndex }}
                                                        }"
                                                        aria-hidden="true">
                                                    </i>
                                                </button>
                                                <button type="button" class="text-red-500 px-2"
                                                    wire:click="removeMenuItem({{ $index }}, {{ $itemIndex }})"
                                                    danger><i class="fa fa-trash-alt"></i></button>
                                            </div>
                                            <div class="flex flex-col" x-show="isMenuOpen{{ $itemIndex }}">
                                                <div class="mb-2">
                                                    <label for="menuItemLabel{{ $index }}-{{ $itemIndex }}"
                                                        class="block font-medium mb-2">Label:</label>
                                                    <input type="text"
                                                        id="menuItemLabel{{ $index }}-{{ $itemIndex }}"
                                                        wire:model="menuItems.{{ $index }}.items.{{ $itemIndex }}.label"
                                                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                </div>
                                                <div>
                                                    <label for="menuItemUrl{{ $index }}-{{ $itemIndex }}"
                                                        class="block font-medium mb-2">URL:</label>
                                                    <input type="text"
                                                        id="menuItemUrl{{ $index }}-{{ $itemIndex }}"
                                                        wire:model="menuItems.{{ $index }}.items.{{ $itemIndex }}.url"
                                                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="my-2 text-center">
                                <button type="button" wire:click="addMenuItem({{ $index }})"
                                    class="text-red-500 hover:text-red-700">Add item</button>
                            </div>
                            <div class="my-2 text-center">
                                <x-button type="button" wire:click="removeMenu({{ $index }})" danger>
                                    <i class="fa fa-trash-alt">
                                </x-button>
                            </div>
                        </div>
                    @endforeach
                    <div class="w-full flex justify-center">
                        <x-button type="button" wire:click="addMenu" primary>Add Menu</x-button>
                        <x-button type="button" wire:click="saveMenuItems" primary>Save Menu</x-button>
                    </div>
                </div>
            </div>
            <div class="p-2 border mb-4">
                <div class="flex justify-between mb-2">
                    <label for="isColor" class="block font-medium mb-2">Color Scheme:</label>
                    <button @click="isColor = !isColor">
                        <i class="fa fa-caret-down" :class="{ 'fa-caret-up': isColor, 'fa-caret-down': !isColor }"
                            aria-hidden="true">
                        </i>
                    </button>
                </div>
                <div x-show="isColor" class="flex flex-col space-y-2 py-4">
                    <label for="colorScheme" class="block font-medium mb-2">Select a color :</label>
                    <div class="grid grid-cols-6 gap-4">
                        @foreach ($colors as $color)
                            <button type="button"
                                class="w-6 h-6 rounded-full bg-{{ $color }}-500 cursor-pointer"
                                wire:click="selectedColor('{{ $color }}')"></button>
                        @endforeach
                    </div>
                    <label for="colorScheme" class="block font-medium mb-2">Colors :</label>
                    <div class="grid grid-cols-6 gap-4">
                        @foreach ($colorOptions as $index => $color)
                            <div class="relative">
                                <button
                                    class="w-6 h-6 rounded-full bg-{{ $selectedColor }}-{{ $color }} cursor-pointer"
                                    wire:click="selectedColors({{ $index }},{{ $color }})">
                                </button>
                                <span class="text-sm font-medium text-gray-500">{{ $color }}</span>
                                {{-- <button class="absolute top-5 bg-white right-0 text-sm font-medium text-red-500"
                                    wire:click="removeColor({{ $index }})">X</button> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="p-2 border mb-4">
                <div class="flex justify-between mb-2">
                    <label for="breadcrumb" class="block font-medium mb-2">Breadcrumb:</label>
                    <button @click="isBreadcrumb = !isBreadcrumb">
                        <i class="fa fa-caret-down"
                            :class="{ 'fa-caret-up': isBreadcrumb, 'fa-caret-down': !isBreadcrumb }"
                            aria-hidden="true">
                        </i>
                    </button>
                </div>
                <div x-show="isBreadcrumb" class="flex flex-col space-y-2 py-4">
                    <label for="breadcrumbType" class="block font-medium mb-2">{{ __('Breadcrumb Type') }}:</label>
                    <div class="flex space-x-2">
                        <label>
                            <input type="radio" name="breadcrumbType" value="centered" wire:model="breadcrumbType"
                                class="mr-2">
                            Centered
                        </label>
                        <label>
                            <input type="radio" name="breadcrumbType" value="simple" wire:model="breadcrumbType"
                                class="mr-2">
                            Simple
                        </label>
                        <label>
                            <input type="radio" name="breadcrumbType" value="image" wire:model="breadcrumbType"
                                class="mr-2">
                            With Image
                        </label>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="breadcrumbImage" class="block font-medium mb-2">{{ __('Image URL') }}:</label>
                        <input type="text" name="breadcrumbImage" wire:model="breadcrumbImage" class="w-full">
                    </div>

                    <x-button type="button" wire:click="saveBreadcrumbs" warning>
                        <i class="fa fa-plus"></i>
                    </x-button>
                </div>
            </div>
            <div class="p-2 border mb-4">
                <div class="flex justify-between mb-2">
                    <label for="loaderSettings" class="block font-medium mb-2">Loader Settings:</label>
                    <button @click="isLoader = !isLoader">
                        <i class="fa fa-caret-down" :class="{ 'fa-caret-up': isLoader, 'fa-caret-down': !isLoader }"
                            aria-hidden="true">
                        </i>
                    </button>
                </div>
                <div x-show="isLoader" class="flex flex-col space-y-2 py-4">
                    <label for="backgroundColor" class="block font-medium mb-2">{{ __('Background color') }}:</label>
                    <input type="color" id="backgroundColor" wire:model="backgroundColor"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                    <label for="color" class="block font-medium mb-2">{{ __('Color') }}:</label>
                    <input type="color" id="color" wire:model="color"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                    <label for="customLoader" class="block font-medium mb-2">{{ __('Custom Loader') }}:</label>
                    <input type="file" id="customLoader" wire:model="customLoader"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
            </div>

        </div>

        <div class="w-[65%] mx-4">
            <div class="w-full p-2 border mb-4" x-show="isCardContent">
                <div class="flex justify-between mb-2">
                    <label for="cardContent" class="block font-medium mb-2">Card Content:</label>
                    <button @click="isCardContent = !isCardContent">
                        <i class="fa fa-caret-down"
                            :class="{ 'fa-caret-up': isCardContent, 'fa-caret-down': !isCardContent }"
                            aria-hidden="true">
                        </i>
                    </button>
                </div>
                <div x-show="isCardContent" class="flex flex-col space-y-2 py-4">
                    @foreach ($cardContent as $index => $item)
                        <label for="cardImage" class="block font-medium mb-2">Image Upload:</label>
                        <input type="file" id="cardImage"
                            wire:model="cardContent.{{ $index }}.cardImage"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                        <label for="cardTitle" class="block font-medium mb-2">Title:</label>
                        <input type="text" id="cardTitle"
                            wire:model="cardContent.{{ $index }}.cardTitle"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                        <label for="cardText" class="block font-medium mb-2">Text:</label>
                        <textarea id="cardText" wire:model="cardContent.{{ $index }}.cardText"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>

                        <label for="cardButtonText" class="block font-medium mb-2">Button Text:</label>
                        <input type="text" id="cardButtonText"
                            wire:model="cardContent.{{ $index }}.cardButtonText"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                        <label for="cardButtonLink" class="block font-medium mb-2">Button Link:</label>
                        <input type="text" id="cardButtonLink"
                            wire:model="cardContent.{{ $index }}.cardButtonLink"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                        <label for="cardBgColor" class="block font-medium mb-2">Background color:</label>
                        <input type="color" id="cardBgColor"
                            wire:model="cardContent.{{ $index }}.cardBgColor"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                        <label for="cardTextColor" class="block font-medium mb-2">Text Color:</label>
                        <input type="color" id="cardTextColor"
                            wire:model="cardContent.{{ $index }}.cardTextColor"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                        <label for="cardSize" class="block font-medium mb-2">Size:</label>
                        <input type="text" id="cardSize"
                            wire:model="cardContent.{{ $index }}.cardSize"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <x-button danger type="button" wire:click="removeCardContent({{ $index }})"><i
                                class="fa fa-trash-alt"></i></x-button>
                    @endforeach
                    <div class="w-full flex justify-center">
                        <x-button type="button" wire:click="saveCardContent" primary>{{ __('Save') }}
                        </x-button>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 border mb-4" x-show="isTabItems">
                <div class="flex justify-between mb-2">
                    <label for="tabItems" class="block font-medium mb-2">Tab Items:</label>
                    <button @click="isTabItems = !isTabItems">
                        <i class="fa fa-caret-down"
                            :class="{ 'fa-caret-up': isTabItems, 'fa-caret-down': !isTabItems }" aria-hidden="true">
                        </i>
                    </button>
                </div>
                <div x-show="isTabItems" class="flex flex-wrap">
                    <div class="space-y-2 w-full py-2">
                        @foreach ($components['tabItems'] as $index => $item)
                            <label for="title" class="block font-medium mb-2">{{ __('Title') }}:</label>
                            <x-input type="text" id="title"
                                wire:model="components.tabItems.{{ $index }}.title"
                                wire:key="tab-item-title-{{ $index }}" />
                            <label for="content" class="block font-medium mb-2">{{ __('Content') }}:</label>
                            <textarea id="content" wire:model="components.tabItems.{{ $index }}.content"
                                wire:key="tab-item-content-{{ $index }}"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                            <x-button type="button" class="text-center"
                                wire:click="removeTabItem ({{ $index }})" danger><i
                                    class="fa fa-trash-alt"></i></x-button>
                        @endforeach
                    </div>
                    <div class="w-full flex justify-center">
                        <x-button type="button" class="text-center" wire:click="saveTabItems" primary>
                            {{ __('Save') }}</x-button>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 border mb-4" x-show="isListItems">
                <div class="flex justify-between mb-2">
                    <label for="listItems" class="block font-medium mb-2">List Items:</label>
                    <button @click="isListItems = !isListItems">
                        <i class="fa fa-caret-down"
                            :class="{ 'fa-caret-up': isListItems, 'fa-caret-down': !isListItems }" aria-hidden="true">
                        </i>
                    </button>
                </div>
                <div x-show="isListItems" class="flex flex-wrap">
                    <div class="space-y-2 w-full py-2">
                        @foreach ($components['listItems'] as $index => $item)
                            <x-input type="text" id="listItems"
                                wire:model="components.listItems.{{ $index }}.itemText"
                                wire:key="accordion-item-title-{{ $index }}" />
                            <x-button type="button" wire:click="removeListItem({{ $index }})" danger><i
                                    class="fa fa-trash-alt"></i></x-button>
                        @endforeach
                    </div>
                    <div class="w-full flex justify-center">
                        <x-button type="button" wire:click="saveListItems" primary> {{ __('Save') }}
                        </x-button>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 border mb-4" x-show="isTextContent">
                <div class="flex justify-between mb-2">
                    <label for="text" class="block font-medium mb-2">Text:</label>
                    <button @click="isTextContent = !isTextContent">
                        <i class="fa fa-caret-down"
                            :class="{ 'fa-caret-up': isTextContent, 'fa-caret-down': !isTextContent }"
                            aria-hidden="true">
                        </i>
                    </button>
                </div>
                <div x-show="isTextContent" class="flex flex-col space-y-2 py-4">
                    <textarea id="text" wire:model="text"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                </div>
            </div>
            <div class="w-full p-2 border mb-4" x-show="isAccordionItems">
                <div class="flex justify-between mb-2">
                    <label for="accordionItems" class="block font-medium mb-2">Accordion Items:</label>
                    <button @click="isAccordionItems = !isAccordionItems">
                        <i class="fa fa-caret-down"
                            :class="{ 'fa-caret-up': isAccordionItems, 'fa-caret-down': !isAccordionItems }"
                            aria-hidden="true">
                        </i>
                    </button>
                </div>
                <div x-show="isAccordionItems" class="flex flex-wrap">
                    <div class="space-y-2 w-full py-2">
                        @foreach ($components['accordionItems'] as $index => $item)
                            <label for="title" class="block font-medium mb-2">{{ __('Title') }}:</label>
                            <x-input type="text" id="title"
                                wire:model="components.accordionItems.{{ $index }}.title"
                                wire:key="accordion-item-title-{{ $index }}" />
                            <label for="content" class="block font-medium mb-2">{{ __('Content') }}:</label>
                            <textarea id="content" wire:model="components.accordionItems.{{ $index }}.content"
                                wire:key="accordion-item-content-{{ $index }}"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                            <x-button type="button" class="text-center"
                                wire:click="removeAccordionItem({{ $index }})" danger><i
                                    class="fa fa-trash-alt"></i></x-button>
                        @endforeach
                    </div>
                    <div class="w-full flex justify-center">
                        <x-button type="button" wire:click="saveAccordionItems" primary>{{ __('Save') }}
                        </x-button>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 border mb-4" x-show="isVideo">
                <div class="flex justify-between mb-2">
                    <label for="video" class="block font-medium mb-2">Video:</label>
                    <button @click="isVideo = !isVideo">
                        <i class="fa fa-caret-down" :class="{ 'fa-caret-up': isVideo, 'fa-caret-down': !isVideo }"
                            aria-hidden="true">
                        </i>
                    </button>
                </div>
                <div x-show="isVideo" class="flex flex-col space-y-2 py-4">
                    <label for="videoEmbeded" class="block font-medium mb-2">{{ __('Embeded') }}:</label>
                    <input type="text" id="video" wire:model="embededVideo"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                    <label for="videoTitle" class="block font-medium mb-2">{{ __('Title') }}:</label>
                    <input type="text" id="videoTitle" wire:model="videoTitle"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
            </div>
            <div class="w-full flex justify-center">
                <x-button primary type="button" @mouseover="showTooltip = true" @click="showTooltip = !showTooltip"
                    @click.away="showTooltip = false">
                    {{ __('Add elements') }}
                </x-button>
            </div>
            <div x-show="showTooltip" class="absolute z-50 w-auto bg-white border rounded-lg shadow-lg m-2">
                <div class="w-full grid grid-cols-2 gap-4 overflow-y-scroll">
                    <div class="rounded-xl p-3">
                        <x-button primary type="button" wire:click="addTabItem" x-on:click="isTabItems = true"
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
                            Add
                            Tab
                            Item</x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button type="button" wire:click="addCardContent" primary
                            x-on:click="isCardContent = true"
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
                            Add Card Content</x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button type="button" wire:click="addListItem" primary x-on:click="isListItems = true"
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
                            Add List items</x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button type="button" wire:click="addAccordionItem" primary
                            x-on:click="isAccordionItems = true"
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
                            Add Accordion Item</x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button type="button" wire:click="addMenuItem" primary
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
                            Add
                            Menu Item</x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button type="button" primary
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300"
                            wire:click="usePredefinedMenu">Add Menu Predifined</x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button primary
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300"
                            type="button" wire:click="addComponent('theme.editorjs')">
                            Add Editojs
                        </x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button primary
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300"
                            type="button" wire:click="addLayout">
                            Add Layout
                        </x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button primary
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300"
                            type="button" wire:click="addComponent('theme.row')">
                            Add Row
                        </x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button primary
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300"
                            type="button" wire:click="addComponent('theme.col')">
                            Add Column
                        </x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button primary
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300"
                            type="button" wire:click="addComponent('theme.grid')">
                            Add Grid
                        </x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button primary type="button"
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300"
                            wire:click="addComponent('theme.img', ['url' => 'https://via.placeholder.com/150'])">
                            Add Image
                        </x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button primary type="button"
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300"
                            wire:click="addTextContent" x-on:click="isTextContent = true">
                            Add Text
                        </x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button primary type="button"
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300"
                            wire:click="addComponent('theme.button', ['label' => 'Click me', 'url' => '#'])">
                            Add Button
                        </x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button primary type="button"
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300"
                            wire:click="addComponent('theme.section', ['bgColor' => 'bg-blue-500'])">
                            Add Section
                        </x-button>
                    </div>
                    <div class="rounded-xl p-3">
                        <x-button primary type="button"
                            class="text-sm shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300"
                            wire:click="addVideo" x-on:click="isVideo = true">
                            Add Video
                        </x-button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- 
    <div class="flex flex-col space-y-2 py-4">
                    <label for="menuLayout" class="block font-medium mb-2">Layout:</label>
                    <select id="menuLayout" name="menuLayout" wire:model="menuLayout"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="horizontal">Horizontal</option>
                        <option value="vertical">Vertical</option>
                    </select>

                    <label for="menuPosition" class="block font-medium mb-2">Position:</label>
                    <select id="menuPosition" name="menuPosition" wire:model="menuPosition"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="left">Left</option>
                        <option value="center">Center</option>
                        <option value="right">Right</option>
                    </select>
                </div>
 --}}

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Livewire.on('previewUpdated', function(html) {
                // Update the preview area with the generated HTML
                document.querySelector('#preview').innerHTML = html;
            });
        });
    </script>
@endpush
