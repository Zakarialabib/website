<div class="mt-10 px-4">
    <div class="swiper-container h-full" x-data="{
        swiper: null,
        slideInterval: 5000,
        autoplay: null,
        init() {
            this.swiper = new Swiper('.swiper-container', {
                slidesPerView: 'auto',
                spaceBetween: 16,
                grabCursor: true,
                breakpoints: {
                    250: {
                        slidesPerView: 1,
                        spaceBetween: 15,
                    },
                    360: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 50,
                    },
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                loop: true,
                autoplay: {
                    delay: this.slideInterval,
                    disableOnInteraction: false,
                },
            });
            this.startAutoplay();
        },
        startAutoplay() {
            this.autoplay = setInterval(() => {
                this.swiper.slideNext();
            }, this.slideInterval);
        },
    
    }" x-init="init">
        <div class="swiper-wrapper w-auto">
            @foreach ($products as $index => $product)
                <div class="swiper-slide">
                    <x-product-card :product="$product" />
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
