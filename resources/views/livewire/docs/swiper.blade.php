<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Swiper Slider</x-slot:title>
    <x-slot:page_title>Swiper Slider</x-slot:page_title>

    <p>
        The Swiper Slider component allows you to create a responsive slider with a variety of options. This guide will walk you through its usage and features. The component is built with flexibility in mind, allowing you to customize its appearance and behavior to suit your needs.
    </p>

    <h2 id="basic">Basic Usage</h2>

    <p>
        The <code class="inline text-red-500">data</code> attribute is the driving force behind the Swiper Slider component. It expects an <code class="inline text-red-500">array</code> to be passed to it. Here's an example using a list of products:
    </p>

    <pre class="language-js line-numbers">
        <code>
        &lt;?php
            $options = [
                [ 'name' => 'Product 1', 'price' => 100, 'image' => 'https://via.placeholder.com/150' ],
                [ 'name' => 'Product 2', 'price' => 200, 'image' => 'https://via.placeholder.com/150' ],
                [ 'name' => 'Product 3', 'price' => 300, 'image' => 'https://via.placeholder.com/150' ],
                [ 'name' => 'Product 4', 'price' => 400, 'image' => 'https://via.placeholder.com/150' ],
                [ 'name' => 'Product 5', 'price' => 500, 'image' => 'https://via.placeholder.com/150' ],
            ];
        </code>

    </pre>

    <p>
        This structure is all you need to render a Swiper Slider component. The default array keys used are <code class="inline text-red-500">name</code>, <code class="inline text-red-500">price</code>, and <code class="inline text-red-500">image</code>. The 'name' key is used for the product name, the 'price' key is used for the product price, and the 'image' key is used for the product image.

    </p>

    <div class="p-5 bg-white">
        <x-swiper :options="$options" />
    </div>

    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-swiper :options="$options" />
        </code>

    </pre>

    <h2 id="options">Options</h2>   

    <p>
        The Swiper Slider component has the following options:
    </p>

    <div class="p-5 bg-white">
        <x-table>
            <x-slot name="header">
                <tr>
                    <th class="border-b-2 border-gray-300 dark:border-gray-700">Name</th>
                    <th class="border-b-2 border-gray-300 dark:border-gray-700">Type</th>
                    <th class="border-b-2 border-gray-300 dark:border-gray-700">Description</th>
                </tr>
            </x-slot>

            <tr>
                <td class="border-b border-gray-300 dark:border-gray-700">options</td>
                <td class="border-b border-gray-300 dark:border-gray-700">Array</td>
                <td class="border-b border-gray-300 dark:border-gray-700">The list of products to display in the slider.</td>
            </tr>
        </x-table>
    </div>

    <h2 id="customization">Customization</h2>

    <p>
        The Swiper Slider component is highly customizable, allowing you to change its appearance and behavior to suit your needs. You can customize the slider by modifying the Swiper options in the component file.

    </p>

    <p>
        Here's an example of how you can customize the Swiper Slider component:

    </p>

    <pre class="language-js line-numbers">
        <code>
        &lt;?php
            $options = [
                [ 'name' => 'Product 1', 'price' => 100, 'image' => 'https://via.placeholder.com/150' ],
                [ 'name' => 'Product 2', 'price' => 200, 'image' => 'https://via.placeholder.com/150' ],
                [ 'name' => 'Product 3', 'price' => 300, 'image' => 'https://via.placeholder.com/150' ],
                [ 'name' => 'Product 4', 'price' => 400, 'image' => 'https://via.placeholder.com/150' ],
                [ 'name' => 'Product 5', 'price' => 500, 'image' => 'https://via.placeholder.com/150' ],
            ];
        </code>

    </pre>

    <p>
        This structure is all you need to render a Swiper Slider component. The default array keys used are <code class="inline text-red-500">name</code>, <code class="inline text-red-500">price</code>, and <code class="inline text-red-500">image</code>. The 'name' key is used for the product name, the 'price' key is used for the product price, and the 'image' key is used for the product image.

    </p>    
    

    {{-- <div class="mt-10 px-4">
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
            @foreach ($options as $index => $option)
                <div class="swiper-slide">
                    <x-product-card :product="$option" />
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
 --}}

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.swiper');
        </script>
    </x-slot>
</div>