@props(['link', 'type', 'color' => 'blue'])

<a {{ $attributes->merge(['class' => 'inline-flex items-center text-base md:text-lg font-semibold text-' . $color . '-500 hover:text-' . $color . '-600']) }}
    href="{{ $link }}" target="_blank" rel="noopener noreferrer">
    @if ($type === 'facebook')
        <i class="fab fa-facebook-square mr-3"></i>
    @elseif ($type === 'instagram')
        <i class="fab fa-instagram-square mr-3"></i>
    @elseif (($type === 'twitter') | ($namae === 'x'))
        <i class="fab fa-twitter-square mr-3"></i>
    @elseif ($type === 'linkedin')
        <i class="fab fa-linkedin mr-3"></i>
    @elseif ($type === 'youtube')
        <i class="fab fa-youtube-square mr-3"></i>
    @elseif ($type === 'pinterest')
        <i class="fab fa-pinterest-square mr-3"></i>
    @elseif ($type === 'snapchat')
        <i class="fab fa-snapchat-square mr-3"></i>
    @elseif ($type === 'tiktok')
        <i class="fab fa-tiktok mr-3"></i>
    @elseif ($type === 'whatsapp')
        <i class="fab fa-whatsapp-square mr-3"></i>
    @elseif ($type === 'email')
        <i class="fab fa-envelope-square mr-3"></i>
    @endif
    @if ($value)
        <span class="mr-3">{{ $value }}</span>
    @endif
</a>
