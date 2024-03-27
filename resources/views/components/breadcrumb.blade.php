@props(['title', 'breadcrumbs' => [], 'position' => 'top', 'inline' => false])

<div
    {{ $attributes->merge(['class' => 'py-4 px-2 flex flex-wrap items-center justify-between font-bold text-white ']) }}>
    @if ($position === 'top')
        <h2 class="{{ $inline ? 'text-left text-2xl ' : 'w-full text-left text-2xl ' }}">
            {{ $title }}
        </h2>
    @endif
    <div class="my-2 flex items-center">
        @foreach ($breadcrumbs as $breadcrumb)
            <a class="flex items-center text-sm no-underline" href="{{ $breadcrumb['url'] }}">
                <i class="{{ $breadcrumb['icon'] }} mr-2"></i>
                <span>{{ $breadcrumb['name'] }}</span>
            </a>
            @if (!$loop->last)
                <span class="inline-block mx-4">
                    <i class="fas fa-chevron-right"></i>
                </span>
            @endif
        @endforeach
    </div>
    @if ($position === 'bottom')
        <h2 class="{{ $inline ? 'text-left text-2xl ' : 'w-full text-left text-2xl ' }}">
            {{ $title }}
        </h2>
    @endif
</div>
