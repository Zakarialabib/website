@props(['product'])

<div class="relative mb-10">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="{{ $product->getFirstMediaUrl('local_files') }}" 
                alt="{{ $product->name }}"  loading="lazy"
                class="w-full h-full object-cover">
            </div>

            @if($product->embeded_video)
            <div class="swiper-slide">
                {!! $product->embeded_video !!}
            </div>
            @endif
        </div>
        
        <div class="swiper-pagination"></div>

        
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>

@push('scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endpush