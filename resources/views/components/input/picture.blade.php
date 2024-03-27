<picture>
    @if (isset($sizes))
        @foreach ($sizes as $minWidth => $size)
            <source srcset="{{ asset($name, $size['width'], $size['height']) }}"
                media="(min-width: {{ $minWidth }}px)">
        @endforeach
    @endif
    <source srcset="{{ asset($name, $defaultSizes['width'], $defaultSizes['height']) }}">
    <img srcset="{{ asset($name, $defaultSizes['width'], $defaultSizes['height']) }}" src="{{ $name }}"
        alt="{{ $alt }}" {!! $attributes !!}>
</picture>
