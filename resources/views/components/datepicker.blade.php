@props([
    'name' => 'bw-datepicker',
    'type' => 'single',
    'default_date' => '',
    'default_label' => null,
    'default_start_date' => '',
    'default_end_date' => '',
    'label_start_date' => 'From',
    'label_end_date' => 'To',
    'format' => 'YYYY-MM-DD',
    'placeholder' => 'Select a date',
    'required' => false,
])

<div id="{{ $attributes['id'] }}-container" x-data="{
    date: '{{ $default_date }}',
    dateFrom: '{{ $default_start_date }}',
    dateTo: '{{ $default_end_date }}',
    pikadayOptions: {
        format: '{{ $format }}',
        firstDay: 1,
        yearRange: 100,
        toString(date, format) {
            return moment(date).format(format);
        },
    }
}" x-on:change="date = $event.target.value"
    x-init="new Pikaday(pikadayOptions).setDate(date, true)" class="relative flex items-center space-x-5">
    @if ($type == 'single')
        <div x-init="pikadayOptions.field = $refs.input;
        new Pikaday(pikadayOptions).setDate(date, true)" class="datepicker-container">
            @if ($default_label)
                <label class="block text-sm font-medium mb-2" @if ($required) required @endif
                    for="{{ $name }}">{{ $default_label }}</label>
            @endif
            <input x-ref="input" type="text" name="{{ $name }}" id="{{ $name }}" x-model="date"
                x-on:change="date = $event.target.value" @if ($required) required @endif
                {{ $attributes->merge(['class' => 'form-input block', 'border-red-500' => $errors->has($name)]) }}
                placeholder="{{ $placeholder }}">
        </div>
    @else
        <div x-init="pikadayOptions.field = $refs.inputFrom;
        new Pikaday(pikadayOptions).setDate(dateFrom, true)" class="datepicker-range">
            <label class="block text-sm font-medium mb-2">{{ $label_start_date }}</label>
            <input x-ref="inputFrom" type="text" name="{{ $name }}_from" id="{{ $name }}_from"
                x-model="dateFrom" x-on:change="dateFrom = $event.target.value" {{ $required }}
                {{ $attributes->merge(['class' => 'form-input block', 'border-red-500' => $errors->has($name)]) }}
                placeholder="{{ $placeholder }}">
        </div>
        <div x-init="pikadayOptions.field = $refs.inputTo;
        new Pikaday(pikadayOptions).setDate(dateTo, true)" class="datepicker-range">
            <label class="block text-sm font-medium mb-2">{{ $label_end_date }}</label>
            <input x-ref="inputTo" type="text" name="{{ $name }}_to" id="{{ $name }}_to"
                x-model="dateTo" x-on:change="dateTo = $event.target.value" {{ $required }}
                {{ $attributes->merge(['class' => 'form-input block', 'border-red-500' => $errors->has($name)]) }}
                placeholder="{{ $placeholder }}">
        </div>
    @endif
</div>


<link href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css" rel="stylesheet">

@once
    
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment/moment.js"></script>
    
@endonce
