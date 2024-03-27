@props(['id' => null, 'maxWidth' => null])


@php
    $id = $id ?? md5($attributes->wire('model'));
    
    $maxWidth =
        [
            'sm' => 'sm:max-w-sm',
            'md' => 'sm:max-w-md',
            'lg' => 'lg:max-w-4xl sm:max-w-lg',
            'xl' => 'sm:max-w-xl',
            '2xl' => 'sm:max-w-2xl',
            '3xl' => 'sm:max-w-3xl',
            '4xl' => 'lg:max-w-4xl sm:max-w-lg',
            '5xl' => 'sm:max-w-5xl',
        ][$maxWidth ?? 'lg'] ?? 'sm:max-w-2xl';
@endphp


<div x-data="{
    show: @entangle($attributes->wire('model')).live,
    focusables() {
        let selector = 'a, button, input, textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
        return [...$el.querySelectorAll(selector)]
            .filter(el => !el.hasAttribute('disabled'))
    },
    firstFocusable() { return this.focusables()[0] },
    lastFocusable() { return this.focusables().slice(-1)[0] },
    nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
    prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
    nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
    prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) - 1 },
    autofocus() { let focusable = $el.querySelector('[autofocus]'); if (focusable) focusable.focus() },
}" x-init="$watch('show', value => value && setTimeout(autofocus, 50))" x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false" x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show"
    class="fixed inset-0 overflow-y-auto px-4 py-6 z-50 sm:px-0" style="display: none;" x-cloak>
    <div class="fixed inset-0 transform transition-all" x-on:click="show = false" x-show="show"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <div class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
        x-show="show" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        <div class="bg-gray-50 px-4 py-3 border-b">
            <h2 class="text-lg font-bold text-gray-900">
                {{ $title }}
            </h2>
        </div>
        <div class="my-4 text-center sm:my-2 mx-4 sm:text-left">
            {{ $content }}
        </div>
    </div>
</div>
