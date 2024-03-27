@props(['file' => false, 'multiple' => false, 'single' => false, 'types', 'accept' => 'image/jpg,image/jpeg,image/png,image/webp,application/pdf,application/xls,application/xlsx'])

<div x-data="{ isUploading: false, progress: 0 }">
    <label class="block mt-4 text-sm">
        <div class="w-full p-2 bg-gray-100 border border-gray-300 border-dashed rounded"
            x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false"
            x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            <input type="file" class="hidden" accept="{{ $accept ?? '' }}"
                @if ($multiple) multiple @endif
                wire:model="{{ $attributes->wire('model')->value }}" />

            @if ($multiple && $file)
                <ul class="my-4 grid grid-cols-6 gap-4">
                    @foreach ($file as $image)
                        <li
                            class="relative group col-span-1 h-20 border border-secondary-300 dark:border-secondary-700 rounded-md overflow-hidden">
                            <img class="h-full w-full object-cover" src="{{ $image->getUrl() }}" alt="" />
                        </li>
                    @endforeach
                </ul>
            @elseif ($single && $file)
                <div
                    class="relative group h-20 border border-secondary-300 dark:border-secondary-700 rounded-md overflow-hidden">
                    <img class="h-full w-full object-cover" src="{{ $file->getUrl() }}" alt="" />
                </div>
            @endif

            <div class="relative leading-tight bg-white hover:bg-gray-100 cursor-pointer inline-flex items-center transition duration-500 ease-in-out group overflow-hidden border-2 w-full pl-3 pr-4 py-4 border-dashed"
                x-bind:class="{ 'opacity-50': isUploading }">
                <div class="flex items-center text-sm font-light text-gray-400">
                    <i class="fa fa-upload w-6 h-6 p-1 mr-3 text-gray-500 border rounded-full shadow "></i>
                    {{ __('Upload a file or Image') }} | {{ $types ?? 'Any File' }}
                </div>
                <div x-show="isUploading" div class="absolute mb-2 w-full text-center my-4">{{ __('Uploading...') }}
                    <div class="h-3 relative max-w-lg mx-auto rounded-full overflow-hidden">
                        <div class="w-full h-full bg-gray-200 absolute"></div>
                        <div class="h-full bg-green-500 absolute" x-bind:style="'width:' + progress + '%'">
                        </div>
                    </div>
                </div>
                <div class="absolute inset-0 h-full flex items-center justify-center pointer-events-none"
                    x-bind:class="{ 'opacity-0': !isUploading, 'opacity-100': isUploading }">
                    <i class="fa fa-spinner fa-spin w-6 h-6 text-gray-500"></i>
                </div>
            </div>
        </div>
        @error($attributes->wire('model')->value)
            <span class="mt-1 text-xs text-red-700">{{ $message }}</span>
        @enderror
    </label>
</div>
