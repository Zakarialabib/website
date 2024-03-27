<div class="{{ $attributes['id'] }} relative">
    <input type="text" data-picker {{ $attributes['id'] }} {{ $attributes['name'] }}
        placeholder="{{ $attributes['picker'] === 'date' ? 'select a date' : ($attributes['picker'] === 'time' ? 'select a time' : 'select a date and time') }}"
        {{ $attributes->whereDoesntStartWith('wire:model')->merge(['class' => 'relative block w-[97%] py-3 shadow-sm ps-2 focus:border-indigo-500 focus:ring-indigo-500 placeholder:text-gray-400 border border-solid border-gray-300 text-sm rounded-md ']) }}>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:init', () => {
            let picker = new Pikaday({
                field: document.getElementById('{{ $attributes['id'] }}'),
                format: 'YYYY-M-d',
                toString(date, format) {
                    const day = date.getDate();
                    const month = date.getMonth() + 1;
                    const year = date.getFullYear();
                    return `${year}-${month}-${day}`;
                },
                onSelect: function() {
                    @this.set('{{ $attributes['wire:model'] }}', picker.toString())
                }
            })
        });
    </script>
@endpush
