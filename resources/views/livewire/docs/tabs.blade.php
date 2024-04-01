<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>

<div>
    <x-slot:title>Tabs Component</x-slot:title>
    <x-slot:page_title>Tabs</x-slot:page_title>
    <p id="intro">
        The Tabs component provides a simple way to organize content into collapsible sections. It's built with Tailwind
        CSS and Alpine.js, offering colorful and animated collapsible sections. It's ideal for organizing content in a
        space-efficient manner, allowing users to expand and collapse sections as needed.
    </p>
    <p id="intro">
        The Tabs component is built with Tailwind CSS and Alpine.js, offering colorful and animated collapsible
        sections.
        It's ideal for organizing content in a space-efficient manner, allowing users to expand and collapse sections as
        needed.
    </p>
    <p>Usage Scenarios:</p>
    <ul>
        <li>FAQs</li>
        <li>Product Descriptions</li>
        <li>Terms and Conditions</li>
        <li>Privacy Policy</li>
    </ul>

    <h3 class="mt-4">Tabs with Text</h3>

    <x-tabs :tabs="[
        ['name' => 'Tab 1', 'content' => 'Content for Tab 1'],
        ['name' => 'Tab 2', 'content' => 'Content for Tab 2'],
        ['name' => 'Tab 3', 'content' => 'Content for Tab 3'],
    ]" active="Tab 1" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-accordion title="Tabs with Content" id="custom-accordion" open="true"&gt;
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

    <h3 class="mt-4">Tabs Closed</h3>

    <x-accordion title="Tabs Closed" color="secondary" id="closed-accordion">
        <p>This accordion is closed by default. Click to expand.</p>
    </x-accordion>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-accordion title="Tabs Closed" color="secondary" id="closed-accordion"&gt;
                &lt;p&gt;This accordion is closed by default. Click to expand.&lt;/p&gt;
            &lt;/x-accordion&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Tabs component.</p>

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

                <x-table.td>color</x-table.td>
                <x-table.td>white</x-table.td>
                <x-table.td>Customize the color of the accordion. Available values: <code class="inline">blue</code>,
                    <code class="inline">red</code>, <code class="inline">green</code>, <code
                        class="inline">yellow</code>,
                    etc.</x-table.td>
            </x-table.tr>
        </x-table.tbody>
    </x-table-responsive>

    <h3>Tabs with All Attributes Defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-accordion
                title="Tabs Title"
                id="uniqueTabsId"
                open="true"
                color="green"
                class="rounded-lg shadow-sm"&gt;
                Tabs Content
            &lt;/x-accordion&gt;
        </code>
    </pre>

    <x-slot:sideNavigation>
        <div class="flex items-center">
            <div class="dot"></div><a href="#intro">Tabss</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:sideNavigation>
</div>
