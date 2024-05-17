<div>
    <div x-data="{ open: false }" @keydown.window.escape="open = false">
        <nav class="bg-skin-card sm:flex sm:items-center justify-between py-4 px-4 sm:px-6">
            <div class="flex items-center divide-x divide-skin-light space-x-3">
                <a href="{{ route('articles') }}"
                    class="flex items-center font-sans text-skin-primary text-base font-medium hover:text-skin-primary-hover">
                    <i class="fa fas-chevron-left h-5 w-5 mr-1.5"></i>
                    {{ __('Tous les articles') }}
                </a>
            </div>
            <div class="flex items-center space-x-2 mt-3 sm:mt-0">
                @role('admin')
                    <x-button primaryOutline type="button" wire:click="store">
                        <x-loader class="text-white" wire:loading wire:target="store" />
                        {{ isset($article) ? __('Save') : __('Publish') }}
                    </x-button>
                @else
                    @if (isset($article))
                        <span class="relative z-20 inline-flex shadow-sm rounded-md">
                            <button type="button"
                                class="button inline-flex items-center justify-center py-2 px-4 text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-body focus:ring-green-500 rounded-l-md border-r border-white"
                                disabled>
                                {{ __('Save') }}
                            </button>
                            <span x-data="{ open: false }" @keydown.escape.stop="open = false;" @click.away="open = false"
                                class="-ml-px relative block">
                                <button type="button"
                                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-transparent text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:z-10 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-body focus:ring-green-500"
                                    id="option-menu-button" x-ref="button" @click="open = !open" aria-expanded="false"
                                    aria-haspopup="true" x-bind:aria-expanded="open.toString()">
                                    <span class="sr-only">{{ __('Ouvrir les options') }}</span>
                                    <i class="fa fas-chevron-down h-5 w-5"></i>
                                </button>

                                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    class="origin-top-right absolute right-0 mt-2 -mr-1 w-56 rounded-md shadow-lg bg-skin-card ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    x-ref="menu-items" role="menu" aria-orientation="vertical"
                                    aria-labelledby="option-menu-button" tabindex="-1" @keydown.tab="open = false"
                                    @keydown.enter.prevent="open = false;" @keyup.space.prevent="open = false;"
                                    style="display: none;">
                                    <div class="py-1" role="none">
                                        <button type="button" wire:click="submit"
                                            class="block px-4 py-2 text-sm text-skin-inverted-muted hover:text-skin-inverted"
                                            role="menuitem" tabindex="-1" id="option-menu-item-0">
                                            <x-loader class="text-white" wire:loading wire:target="submit" />
                                            {{ __('Soumettre') }}
                                        </button>
                                        <button type="button" wire:click="store"
                                            class="block px-4 py-2 text-sm text-skin-inverted-muted hover:text-skin-inverted"
                                            role="menuitem" tabindex="-1" id="option-menu-item-1">
                                            <x-loader class="text-white" wire:loading wire:target="save" />
                                            {{ __('Brouillon') }}
                                        </button>
                                    </div>
                                </div>
                            </span>
                        </span>
                    @else
                        <x-button type="button" wire:click="submit">
                            <x-loader class="text-white" wire:loading wire:target="submit" />
                            {{ __('Save') }}
                        </x-button>
                    @endif
                @endhasanyrole

                <button type="button" @click="open = true;"
                    class="inline-flex justify-center py-2 px-4  hover:text-skin-muted focus:outline-none">
                    <i class="fas fa-ellipsis-v h-5 w-5"></i>
                </button>
            </div>
        </nav>

        <div x-cloak x-show="open" class="fixed inset-0 z-50 overflow-hidden" aria-labelledby="slide-over-title"
            x-ref="dialog" aria-modal="true">
            <div class="absolute inset-0 z-30 overflow-hidden">
                <div class="absolute inset-0" aria-hidden="true">
                    <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">
                        <div @click.away="open = false;" x-show="open"
                            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                            class="w-screen max-w-md">
                            <div class="h-full flex flex-col py-6 bg-skin-card shadow-xl overflow-y-scroll lg:pb-12">
                                <div class="px-4 sm:px-6">
                                    <div class="flex items-start justify-between">
                                        <h2 class="text-lg font-medium text-skin-inverted" id="slide-over-title">
                                            {{ __('Paramètres avancés') }}
                                        </h2>
                                        <div class="ml-3 h-7 flex items-center">
                                            <button type="button"
                                                class="bg-skin-card rounded-md text-skin-muted hover: focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-body focus:ring-green-500"
                                                @click="open = false">
                                                <span class="sr-only">{{ __('Fermer') }}</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6 relative flex-1 px-4 sm:px-6">
                                    <div class="h-full" aria-hidden="true">
                                        <x-label for="cover_photo">
                                            {{ __('Image de couverture') }}
                                        </x-label>
                                        <div class="mt-2">
                                            <x-forms.single-upload id="file" wire:click="removeImage"
                                                wire:model="file" :file="$file" :preview="$preview ?? null"
                                                :error="$errors->first('file')" />
                                        </div>

                                        <div x-data="{ on: @entangle('show_toc').live }"
                                            class="mt-8 flex-grow flex items-center justify-between">
                                            <div>
                                                <dt class="text-sm leading-7 font-semibold ">
                                                    {{ __('Afficher le Sommaire') }}
                                                </dt>
                                            </div>
                                            <button type="button"
                                                class="relative inline-flex items-center shrink-0 h-6 w-11 border border-skin-base rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 bg-skin-card-muted"
                                                :class="{ 'bg-green-600': on, 'bg-skin-card-muted': !(on) }"
                                                aria-pressed="false" x-ref="switch" x-state:on="Enabled"
                                                x-state:off="Not Enabled" aria-labelledby="availability-label"
                                                :aria-pressed="on.toString()" @click="on = !on">
                                                <span class="sr-only">{{ __('Afficher le sommaire') }}</span>
                                                <span aria-hidden="true"
                                                    class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-0"
                                                    x-state:on="Enabled" x-state:off="Not Enabled"
                                                    :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                                            </button>
                                        </div>

                                    
                                        <div class="mt-8">
                                            <x-label for="slug">{{ __('URL Slug') }}</x-label>
                                            <x-input wire:model.debounce.500ms="slug" id="slug" name="slug"
                                                class="mt-1" type="text" autocomplete="off" required />
                                        </div>

                                        <div class="mt-8">
                                            <x-label for="canonical_url">{{ __('Canonical URL') }}</x-label>
                                            <span class="text-xs leading-3 text-skin-muted">
                                                {{ __('Modifiez si l\'article a été publié pour la première fois ailleurs (comme sur votre propre blog).') }}
                                            </span>
                                            <x-input wire:model="canonical_url" id="canonical_url"
                                                name="canonical_url" class="mt-1" type="text"
                                                autocomplete="off" />
                                        </div>

                                        <div class="mt-8 standard" wire:ignore>
                                            <x-label for="tags_selected">Tags</x-label>
                                            <x-forms.select wire:model="tags_selected" id="tags_selected"
                                                class="mt-2" multiple>
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}"
                                                        @if (in_array($tag->id, $tags_selected)) selected @endif>
                                                        {{ $tag->name }}</option>
                                                @endforeach
                                            </x-forms.select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="relative max-w-4xl mx-auto z-0 px-4 sm:px-6 lg:px-8 lg:pb-16">
            <x-validation-errors />

            <div class="mt-6">
                <input type="text" wire:model="title" name="title" id="title"
                    class="block w-full h-auto px-0 py-4 text-3xl sm:text-4xl font-bold placeholder-skin-input focus:placeholder-skin-input-focus text-skin-inverted bg-transparent leading-normal border-0 appearance-none focus:ring-0 shadow-none"
                    placeholder="Titre de votre article..." autofocus autocomplete="off" />
                <livewire:markdown-x :content="$body" />
                <div class="mt-6 text-right ">
                    {{ __('Temps de lecture estimé :') }} <span class="text-skin-inverted">{{ $reading_time }}
                        min</span>
                </div>
            </div>
        </main>
    </div>
</div>
