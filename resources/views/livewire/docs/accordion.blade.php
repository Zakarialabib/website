<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>

<div>
    <x-slot:title>Accordion Component</x-slot:title>
    <x-slot:page_title>Accordion</x-slot:page_title>
    <p id="intro">
        The Accordion component is built with Tailwind CSS and Alpine.js, offering colorful and animated collapsible
        sections. It's ideal for organizing content in a space-efficient manner, allowing users to expand and collapse
        sections as needed.
    </p>
    <p>Usage Scenarios:</p>
    <ul>
        <li>
            FAQ Section: Display frequently asked questions where each question can be clicked to reveal its answer.
        </li>
        <li>
            Product Features: Display features of a product where each feature can be expanded for more details.
        </li>
        <li>
            Tutorials/Documentation: Organize tutorials or documentation sections where users can expand/collapse
            sections for different topics.
        </li>
        <li>
            Settings Panel: Create an expandable settings panel where users can expand/collapse different settings
            sections.
        <li>
            Navigation Menu: Build a collapsible navigation menu for mobile devices or sidebars.
        </li>
    </ul>

    <h3 class="my-5">Accordion with Expanded Content</h3>

    <p>The Accordion component is simple to use and can be customized with various attributes. The example below shows
        an
        accordion with expanded content.</p>

    <x-accordion title="Accordion with Content" id="custom-accordion" open="true">
        <p>This accordion contains more complex content:</p>
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
        <p>And some additional text.</p>
    </x-accordion>

    <pre class="my-4 language-markup line-numbers">
        <code>
            &lt;x-accordion title="Accordion with Content" id="custom-accordion" open="true"&gt;
                &lt;p&gt;This accordion contains more complex content:&lt;/p&gt;
                &lt;ul&gt;
                    &lt;li&gt;Item 1&lt;/li&gt;
                    &lt;li&gt;Item 2&lt;/li&gt;
                    &lt;li&gt;Item 3&lt;/li&gt;
                &lt;/ul&gt;
                &lt;p&gt;And some additional text.&lt;/p&gt;
            &lt;/x-accordion&gt;
        </code>
    </pre>

    <h3 class="my-5">Accordion Closed</h3>

    <p>By default, the accordion is closed. Click on the title to expand the content.</p>

    <x-accordion title="Accordion Closed" id="closed-accordion">
        <p>This accordion is closed by default. Click to expand.</p>
    </x-accordion>

    <pre class="my-4 language-markup line-numbers">
        <code>
            &lt;x-accordion title="Accordion Closed" id="closed-accordion"&gt;
                &lt;p&gt;This accordion is closed by default. Click to expand.&lt;/p&gt;
            &lt;/x-accordion&gt;
        </code>
    </pre>

    <h3 class="my-5">Accordion with Custom Icon</h3>

    <p>You can customize the icon displayed next to the title by passing the <code>icon</code> attribute, we use font
        awesome
        icons for this example.
    </p>

    <x-accordion title="Accordion with Icon" icon="arrow-down" id="icon-accordion">
        <p>This accordion has a custom icon next to the title.</p>
    </x-accordion>

    <pre class="my-4 language-markup line-numbers">
        <code>
            &lt;x-accordion title="Accordion with Icon" icon="arrow-down"
             id="icon-accordion"&gt;
                &lt;p&gt;This accordion has a custom icon next to the title.&lt;/p&gt;
            &lt;/x-accordion&gt;
        </code>
    </pre>

    <h3 class="my-5">Accordion with Icon on the Left</h3>

    <p>You can change the position of the icon by passing the <code>iconPosition</code> attribute. The default position
        is on the right side of the title.</p>

    <x-accordion title="Accordion with Icon on the Left" icon="angle-down" iconPosition="left" id="icon-left-accordion">
        <p>This accordion has a custom icon on the left side of the title.</p>
    </x-accordion>

    <pre class="my-4 language-markup line-numbers">
        <code>
            &lt;x-accordion title="Accordion with Icon on the Left" icon="angle-down" iconPosition="left" id="icon-left-accordion"&gt;
                &lt;p&gt;This accordion has a custom icon on the left side of the title.&lt;/p&gt;
            &lt;/x-accordion&gt;
        </code>
    </pre>

    <h3 class="my-5">Accordion with Custom Styling</h3>

    <p>You can customize the style of the accordion by passing the <code>class</code> attribute. You can use any
        Tailwind CSS utility classes to style the accordion.</p>

    <x-accordion title="Accordion with Custom Styling" class="!bg-gray-200 !text-black" id="custom-styling">
        <p>This accordion has custom styling applied using Tailwind CSS utility classes.</p>
    </x-accordion>

    <pre class="my-4 language-markup line-numbers">
        <code>
            &lt;x-accordion title="Accordion with Custom Styling" class="!bg-gray-200 !text-black" id="custom-styling"&gt;
                &lt;p&gt;This accordion has custom styling applied using Tailwind CSS utility classes.&lt;/p&gt;
            &lt;/x-accordion&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Accordion component.</p>

    <x-table-responsive>
        <x-table.thead>
            <x-table.th>Option</x-table.th>
            <x-table.th>Default</x-table.th>
            <x-table.th>Available Values</x-table.th>
        </x-table.thead>
        <x-table.tbody>
            <x-table.tr>
                <x-table.td>title</x-table.td>
                <x-table.td></x-table.td>
                <x-table.td>Text to display as the accordion title</x-table.td>
            </x-table.tr>
            <x-table.tr>

                <x-table.td>id</x-table.td>
                <x-table.td>null</x-table.td>
                <x-table.td>HTML id attribute for the accordion container</x-table.td>
            </x-table.tr>
            <x-table.tr>

                <x-table.td>open</x-table.td>
                <x-table.td>false</x-table.td>
                <x-table.td>Specifies if the accordion should be open by default. Value needs to be set as a string
                    not boolean.
                    <br><code class="inline">true</code> <code class="inline">false</code>
                </x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>class</x-table.td>
                <x-table.td>null</x-table.td>
                <x-table.td>Customize the style of the accordion with tailwindcss utility classes
                    <br>e.g. <code class="inline">rounded-lg shadow-sm</code>
                </x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>icon</x-table.td>
                <x-table.td>null</x-table.td>
                <x-table.td>Custom icon to display next to the title</x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>iconPosition</x-table.td>
                <x-table.td>right</x-table.td>
                <x-table.td>Position of the icon relative to the title
                    <br><code class="inline">left</code> <code class="inline">right</code>
                </x-table.td>
            </x-table.tr>
        </x-table.tbody>
    </x-table-responsive>

    <h3>Accordion with All Attributes Defined</h3>
    <pre class="my-4 language-markup line-numbers">
        <code>
            &lt;x-accordion
                title="Accordion Title"
                id="uniqueAccordionId"
                open="true"
                class="rounded-lg shadow-sm"&gt;
                Accordion Content
            &lt;/x-accordion&gt;
        </code>
    </pre>

    <x-slot:sideNavigation>
        <div class="flex items-center">
            <div class="dot"></div><a href="#intro">Accordions</a>
        </div>

        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>

        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:sideNavigation>
</div>
