<div>
    <div x-data="{ editing: false }" x-cloak class="relative">
        @if ($editing)
            <div class="flex items-center">
                <x-input name="value" wire:model="value" class="bg-transparent" id="{{ $uniqueId }}" />
                <button wire:click="saveValue" class="bg-green-500 text-white px-2 py-1 m-1">Save</button>
                <button wire:click="cancelEditing" class="bg-red-500 text-white px-2 py-1 m-1">Cancel</button>
            </div>
        @else
            <div class="absolute bottom-0 right-0 flex items-center">
                <span x-show="!editing">{{ $value }}</span>
                <!-- Add an edit icon (Font Awesome example) -->
                <div class="ml-2 cursor-pointer" @click="editing = true">
                    <i class="fas fa-pencil-alt text-blue-500"></i>
                </div>
            </div>
        @endif
    </div>
</div>
