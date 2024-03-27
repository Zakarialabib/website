@props(['text'])

<div x-data="{ tooltip: false }" class="relative z-20 flex items-center">
    <div class="cursor-pointer" x-on:click="copyToClipboard('{{ $text }}');tooltip = !tooltip">
        <span class="material-icons">content_copy</span>
    </div>
    <div x-show="tooltip" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-x-2" x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-x-0"
        x-transition:leave-end="opacity-0 translate-x-2" class="absolute left-0" x-cloak>
        <div
            class="px-3 h-7 -ml-1.5 items-center flex text-xs bg-green-500 border-r border-green-500 -translate-x-full text-white rounded">
            <span>Copied!</span>
            <div
                class="absolute right-0 inline-block h-full -mt-px overflow-hidden translate-x-3 -translate-y-2 top-1/2">
                <div class="w-3 h-3 origin-top-left transform rotate-45 bg-green-500 border border-transparent"></div>
            </div>
        </div>
    </div>
</div>


