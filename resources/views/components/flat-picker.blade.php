<div id="{{ $attributes['id'] }}" class="relative w-full flex flex-col" x-data="{
    value: @entangle($attributes->wire('model')),
    picker: null,
}"
    x-on:change="value = $event.target.value" x-init="picker = flatpickr($refs.input, {
        dateFormat: 'd-m-Y',
        allowInput: true,
        onChange: (selectedDates, dateStr, instance) => {
            value = dateStr;
        },
        onClose: (selectedDates, dateStr, instance) => {
            if (selectedDates.length === 0 || isNaN(selectedDates[0].getTime())) {
                value = '';
            } else {
                value = instance.formatDate(selectedDates[0], 'd-m-Y');
            }
        }
    })">

    <input id="{{ $attributes['id'] }}" x-ref="input" x-bind:value="value" type="text"
        name="{{ $name ?? $attributes->wire('model')->value }}"
        placeholder="{{ $attributes['picker'] === 'date' ? 'Select a date' : ($attributes['picker'] === 'time' ? 'select a time' : 'select a date and time') }}"
        {{ $attributes->whereDoesntStartWith('wire:model')->merge(['class' => 'font-poppins z-0 relative block py-3 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-base border border-solid border-gray-300 rounded-md flex-grow ps-2']) }}>

    <div class="z-50 flex gap-x-4 absolute inset-y-0 right-2 items-center cursor-pointer">

        <button type="button" x-on:click="picker.open()" class="bg-transparent border-0">

            <span class="material-icons text-blue-500">
                calendar_month
            </span>
        </button>
        <button type="button" x-on:click="picker.clear()" class="bg-transparent border-0">
            <span class="material-icons text-red-500">
                clear
            </span>
        </button>
    </div>
</div>

