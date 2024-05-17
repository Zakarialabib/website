<div>
    <div x-data="{ openNotification: false }">
        <button @click="openNotification = !openNotification" type="button" class="relative group px-6">
            <i class="fa fa-bell text-gray-600"></i>
            <span
                class="absolute top-0 right-2 transform translate-x-1/2 -translate-y-1/2 bg-red-500 text-white rounded-full px-2 py-1">
                {{ count($this->notifications) }}
            </span>
        </button>

        <div x-show="openNotification" x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 translate-x-full" x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-full"
            @click.away="openNotification = false"
            class="absolute h-auto right-0 top-0 mt-12 w-96 bg-white shadow-lg p-4 overflow-y-auto overflow-x-hidden">
            <h4 class="text-xl font-semibold mb-4">{{ __('Notifications') }}</h4>
            @foreach ($this->notifications as $notification)
                <div class="w-full p-3 mt-4 bg-white rounded shadow flex flex-shrink-0">
                    <div tabindex="0" aria-label="group icon" role="img"
                        class="focus:outline-none w-8 h-8 border rounded-full border-gray-200 flex flex-shrink-0 items-center justify-center">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.33325 14.6667C1.33325 13.2522 1.89516 11.8956 2.89535 10.8954C3.89554 9.89523 5.2521 9.33333 6.66659 9.33333C8.08107 9.33333 9.43763 9.89523 10.4378 10.8954C11.438 11.8956 11.9999 13.2522 11.9999 14.6667H1.33325ZM6.66659 8.66666C4.45659 8.66666 2.66659 6.87666 2.66659 4.66666C2.66659 2.45666 4.45659 0.666664 6.66659 0.666664C8.87659 0.666664 10.6666 2.45666 10.6666 4.66666C10.6666 6.87666 8.87659 8.66666 6.66659 8.66666ZM11.5753 10.1553C12.595 10.4174 13.5061 10.9946 14.1788 11.8046C14.8515 12.6145 15.2515 13.6161 15.3219 14.6667H13.3333C13.3333 12.9267 12.6666 11.3427 11.5753 10.1553ZM10.2266 8.638C10.7852 8.13831 11.232 7.52622 11.5376 6.84183C11.8432 6.15743 12.0008 5.41619 11.9999 4.66666C12.0013 3.75564 11.7683 2.85958 11.3233 2.06466C12.0783 2.21639 12.7576 2.62491 13.2456 3.2208C13.7335 3.81668 14.0001 4.56315 13.9999 5.33333C14.0001 5.80831 13.8987 6.27784 13.7027 6.71045C13.5066 7.14306 13.2203 7.52876 12.863 7.84169C12.5056 8.15463 12.0856 8.38757 11.6309 8.52491C11.1762 8.66224 10.6974 8.7008 10.2266 8.638Z"
                                fill="#047857"></path>
                        </svg>
                    </div>
                    <div class="pl-3 w-full">
                        <div class="flex items-center justify-between w-full">
                            <p tabindex="0" class="focus:outline-none text-sm leading-none">
                                {{ $notification->data['message'] }}
                            </p>
                            <div wire:click="markAsRead('{{ $notification->id }}')" tabindex="0"
                                aria-label="close icon" role="button" class="focus:outline-none cursor-pointer">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 3.5L3.5 10.5" stroke="#4B5563" stroke-width="1.25"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M3.5 3.5L10.5 10.5" stroke="#4B5563" stroke-width="1.25"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </div>
                        <p tabindex="0" class="focus:outline-none text-xs leading-3 pt-1 text-gray-500">
                            {{ $notification->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
            @endforeach
            @if (count($this->notifications) === 0)
                <p class="text-gray-500">No new notifications.</p>
            @endif
        </div>
    </div>
</div>
