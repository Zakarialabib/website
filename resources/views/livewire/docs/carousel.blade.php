<?php

use function Livewire\Volt\{state, layout, title, computed};
use Livewire\Volt\Component;

layout('layouts.guest');

title('Carousel Component');

$items = computed(function () {
    return json_encode([
        [
            // image url as placeholder
            'image' => 'https://via.placeholder.com/800x400',
            'title' => 'First Slide Title',
            'subtitle' => 'First Slide Subtitle',
            'description' => 'This is the description for the first slide.',
            'link' => '/first-slide-link',
            'link_text' => 'Learn More',
        ],
        [
            'image' => 'https://via.placeholder.com/800x400',
            'title' => 'Second Slide Title',
            'subtitle' => 'Second Slide Subtitle',
            'description' => 'This is the description for the second slide.',
            'link' => '/second-slide-link',
            'link_text' => 'Read More',
        ],
    ]);
})->persist(seconds: 10);

$carouselItems = computed(function () {
    return json_encode([
        [
            'image' => 'slide1.jpg',
            'title' => 'First Slide Title',
            'subtitle' => 'First Slide Subtitle',
            'description' => 'This is the description for the first slide.',
            'link' => '/first-slide-link',
            'link_text' => 'Learn More',
        ],
        [
            'image' => 'slide2.jpg',
            'title' => 'Second Slide Title',
            'subtitle' => 'Second Slide Subtitle',
            'description' => 'This is the description for the second slide.',
            'link' => '/second-slide-link',
            'link_text' => 'Read More',
        ],
    ]);
})->persist(seconds: 10);

?>
<div>
    <x-slot:title>Carousel Component</x-slot:title>
    <x:slot:page_title>Carousel</x:slot:page_title>

    <p>
        The Carousel component is a simple component that allows you to create a carousel with any content you want. The
        carousel component is designed to be super simple and flexible. It does not have any predefined layout or design
        styles. This is because carousels are used for a wide variety of content types and forcing a specific layout on
        them
        would defeat the purpose of having a carousel component.
    </p>

    <h2 id="examples">Basic Carousel</h2>

    <x-carousel :items="json_decode($this->items)" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-carousel :items="$items" /&gt;
        </code>
    </pre>

    <h2 id="examples">Practical Examples</h2>

    <h3>Example 1: Carousel with image urls</h3>

    <p>In this example, we are using image urls as placeholders for the carousel slides. This is useful when you have
        images hosted on a CDN or external server.</p>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-carousel :items="[{
                    'image' => 'https://via.placeholder.com/800x400',
                    'title' => 'First Slide Title',
                    'subtitle' => 'First Slide Subtitle',
                    'description' => 'This is the description for the first slide.',
                    'link' => '/first-slide-link',
                    'link_text' => 'Learn More',
                },
                {
                    'image' => 'https://via.placeholder.com/800x400',
                    'title' => 'Second Slide Title',
                    'subtitle' => 'Second Slide Subtitle',
                    'description' => 'This is the description for the second slide.',
                    'link' => '/second-slide-link',
                    'link_text' => 'Read More',
                },
            ]" /&gt;
        </code>
    </pre>

    <x-carousel :items="json_decode($this->items)" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-carousel :items="$items" image-path="images/carousel/" /&gt;
        </code>
    </pre>

    <h3>Example 2: Carousel with local images</h3>

    <p>In this example, we are using local images as placeholders for the carousel slides. This is useful when you have
        images stored in your project.</p>

    <x-carousel :items="json_decode($this->carouselItems)" image-path="images/carousel/" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-carousel :items="[{
                    'image' => 'slide1.jpg',
                    'title' => 'First Slide Title',
                    'subtitle' => 'First Slide Subtitle',
                    'description' => 'This is the description for the first slide.',
                    'link' => '/first-slide-link',
                    'link_text' => 'Learn More',
                },
                {
                    'image' => 'slide2.jpg',
                    'title' => 'Second Slide Title',
                    'subtitle' => 'Second Slide Subtitle',
                    'description' => 'This is the description for the second slide.',
                    'link' => '/second-slide-link',
                    'link_text' => 'Read More',
                },
            ]" /&gt;
        </code>
    </pre>

    <h3>Example 3: Carousel with custom color</h3>

    <p>In this example, we are using a custom color for the carousel. This is useful when you want to match the color of
        the carousel with your website's color scheme.</p>

    <x-carousel :items="json_decode($this->items)" color="red" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-carousel :items="$items" color="red" /&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Carousel component.</p>

    <x-table>
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>items</td>
            <td><em>required</em></td>
            <td>An array of objects that represent each slide in the carousel. Each object should have the following
                properties:</td>
        </tr>
        <tr>
            <td>image path</td>
            <td><em>null</em></td>
            <td>The path to the images in the carousel. This is used to generate the image src attribute for each
                slide.</td>
        </tr>
        <tr>
            <td>color</td>
            <td>blue</td>
            <td>Any valid color name or hex code. This is used to generate the color of the active slide indicator
                and the hover color of the navigation dots.</td>
        </tr>
        <tr>
            <td>class</td>
            <td>bw-carousel</td>
            <td>Any additonal css classes can be added using this attribute. For example if you prefer to have
                non-rounded carousels you can set <code class="inline">class="!rounded-none"</code>.</td>
        </tr>
    </x-table>

    <h3 class="pb-2 ">Carousel with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-carousel
                :items="$carouselItems"
                image-path="images/carousel/"
                color="red"
                class="!rounded-none"
                ...

            &lt;/x-carousel&gt;
        </code>
    </pre>

    <x-slot:sideNavigation>
        <div class="flex items-center">
            <div class="dot"></div><a href="#basic">Basic carousel</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#examples">Practical examples</a>
        </div>

        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:sideNavigation>

</div>
