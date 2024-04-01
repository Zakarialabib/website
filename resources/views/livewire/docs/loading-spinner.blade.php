<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>

<div>
    <x-slot:title>Loading spinner Component</x-slot:title>
    <x-slot:page_title>Loading spinner</x-slot:page_title>
    <p id="intro">
        The Loading spinner component provides a sleek and customizable way to display a loading indicator on your
        website
        or application. It's ideal for indicating that content is being loaded or processed, providing a smooth and
        intuitive user experience.
    </p>
    <p id="intro">
        The Loading spinner component is built with Tailwind CSS, making it easy to customize the appearance and
        behavior
        to suit your specific needs. It's also fully responsive and works seamlessly across all devices and screen
        sizes.
    </p>
    <p>Usage Scenarios:</p>
    <ul>
        <li>Indicating that content is being loaded or processed</li>
        <li>Providing a smooth and intuitive user experience</li>
        <li>Enhancing the overall appearance and functionality of your website or application</li>
    </ul>

    <h3 class="mt-4">Loading spinner Size</h3>

    <x-loading size="xl" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-loading size="xl"  /&gt;
        </code>
    </pre>

    <h3 class="mt-4">Loading Spinner Color</h3>

    <x-loading size="lg" color="text-red-500" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-loading 
            size="lg" 
            color="text-red-500" 
             /&gt;
        </code>
    </pre>

    <h3 class="mt-4">Loading Spinner Icon</h3>

    <x-loading color="text-red-500" icon="spinner" iconSize="text-5xl" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-loading 
            color="text-red-500" 
            icon="spinner" 
            iconSize="text-5xl"
            /&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Loading spinner component.</p>

    <x-table-responsive>
        <x-table.thead>
            <x-table.th>Option</x-table.th>
            <x-table.th>Default</x-table.th>
            <x-table.th>Available Values</x-table.th>
        </x-table.thead>
        <x-table.tbody>
            <x-table.tr>
                <x-table.td>size</x-table.td>
                <x-table.td>lg</x-table.td>
                <x-table.td>Size of the loading spinner. Available values: <code class="inline">sm</code>, <code
                        class="inline">md</code>, <code class="inline">lg</code>, <code class="inline">xl</code>, <code
                        class="inline">xxl</code>
                </x-table.td>
            </x-table.tr>
            <x-table.tr>

                <x-table.td>color</x-table.td>
                <x-table.td>white</x-table.td>
                <x-table.td>Customize the color of the loading spinner with tailwind css colors like text-white or
                    any other color</x-table.td>
            </x-table.tr>


            <x-table.tr>

                <x-table.td>icon</x-table.td>
                <x-table.td>null</x-table.td>
                <x-table.td>Customize icon of the loading spinner with tailwind css colors like text-white or
                    any other color</x-table.td>
            </x-table.tr>

            <x-table.tr>

                <x-table.td>iconSize</x-table.td>
                <x-table.td>null</x-table.td>
                <x-table.td>Customize icon size of the loading spinner with tailwind css colors like text-white or
                    any other color</x-table.td>
            </x-table.tr>


        </x-table.tbody>
    </x-table-responsive>

    <h3>Loading spinner with All Attributes Defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-loading 
                size="xl" 
                color="text-red-500"
                icon="spinner" 
                iconSize="text-5xl"    
            /&gt;
        </code>
    </pre>

    <x-slot:sideNavigation>
        <div class="flex items-center">
            <div class="dot"></div><a href="#intro">Loading spinner</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:sideNavigation>
</div>
