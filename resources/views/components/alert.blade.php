@props(['type' => null, 'dismissal' => true, 'show' => true, 'showIcon' => false])

@php
    $id = 'alert_' . uniqid();
    $bgColor = '';
    switch ($type) {
        case 'success':
            $bgColor = 'bg-green-500';
            break;
        case 'error':
            $bgColor = 'bg-red-500';
            break;
        case 'warning':
            $bgColor = 'bg-yellow-600';
            break;
        case 'info':
            $bgColor = 'bg-blue-300';
            break;
        default:
            $bgColor = 'bg-blue-500'; // Default color
    }
@endphp
<div x-data="{ show: {{ $show }} }" role="alert" id="{{ $id }}" x-show="show" @keydown.escape.window="show = false"
    x-transition x-cloak
    {{ $attributes->merge(['class' => 'flex justify-between items-center text-white py-4 px-6 text-md rounded-lg relative ' . $bgColor]) }}>
    @if ($showIcon)
        <span class="inline-block mr-5 align-middle">
            @switch($type)
                @case('error')
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                @break

                @case('warning')
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                @break

                @case('info')
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                @break

                @default
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
            @endswitch
        </span>
    @endif

    <div class="px-4 inline-block align-middle">
        {{ $slot }}
    </div>

    @if ($dismissal)
        <button type="button" x-on:click="show = false"
            class="text-black border-transparent bg-white rounded-full focus:outline-none">
            <span aria-hidden="true">x</span>
        </button>
    @endif

</div>
