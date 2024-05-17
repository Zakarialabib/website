<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Badge Component</x-slot:title>
    <x-slot:page_title>Badge</x-slot:page_title>

    <p>
        Badges are used to highlight important information in a visually appealing way. They are often used to
        display
        counts, statuses, or other information that needs to be highlighted.
    </p>

    <h2 id="type">Color of Badge</h2>
    <div class="text-center p-4">
        <x-badge color="primary">Subscribe Now</x-badge>
    </div>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-badge color="primary" &gt;
                subscribe now
            &lt;/x-badge&gt;
        </code>
    </pre>
    <h2 id="type">Badge Link</h2>
    <div class="text-center p-4">
        <x-badge href="/" color="primary">Subscribe Now</x-badge>
    </div>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-badge href="/" color="primary" &gt;
                subscribe now
            &lt;/x-badge&gt;
        </code>
    </pre>

    <h2 id="coloured">Colored Badge</h2>
    <p>
        Only primary badges can take on different colors. Below are examples of badges with different colors.
    </p>

    <x-grid>
        <x-badge color="primary">Primary</x-badge>
        <x-badge color="secondary">Secondary</x-badge>
        <x-badge color="danger">Danger</x-badge>
        <x-badge color="alert">Alert</x-badge>
        <x-badge color="success">Success</x-badge>
        <x-badge color="warning">Warning</x-badge>
        <x-badge color="info">Info</x-badge>
    </x-grid>

    <pre class="language-markup line-numbers" data-line="1,5,9,13,17,21,25,29">
            <code>
                &lt;x-badge color="primary"&gt;Primary&lt;/x-badge&gt;
                &lt;x-badge color="seconary"&gt;Secondary&lt;/x-badge&gt;
                &lt;x-badge color="danger"&gt;Danger&lt;/x-badge&gt;
                &lt;x-badge color="alert"&gt;Alert&lt;/x-badge&gt;
                &lt;x-badge color="success"&gt;Success&lt;/x-badge&gt;
                &lt;x-badge color="warning"&gt;Warning&lt;/x-badge&gt;
                &lt;x-badge color="info"&gt;Info&lt;/x-badge&gt;
            </code>
        </pre>
    <h2 id="coloured">Outlined Badge</h2>
    <p>
        Only primary badges can take on different colors. Below are examples of badges with different colors.
    </p>
    <x-grid>
        <x-badge color="primaryOutline">Primary Outline</x-badge>
        <x-badge color="secondaryOutline">Secondary Outline</x-badge>
        <x-badge color="dangerOutline">Danger Outline</x-badge>
        <x-badge color="alertOutline">Alert Outline</x-badge>
        <x-badge color="successOutline">Success Outline</x-badge>
        <x-badge color="warningOutline">Warning Outline</x-badge>
        <x-badge color="infoOutline">Info Outline</x-badge>
    </x-grid>
    <pre class="language-markup line-numbers" data-line="1,5,9,13,17,21,25,29">
            <code>
                &lt;x-badge color="primaryOutline"&gt;Primary Outline&lt;/x-badge&gt;
                &lt;x-badge color="seconaryOutline"&gt;Secondary Outline&lt;/x-badge&gt;
                &lt;x-badge color="dangerOutline"&gt;Danger Outline&lt;/x-badge&gt;
                &lt;x-badge color="alertOutline"&gt;Alert Outline&lt;/x-badge&gt;
                &lt;x-badge color="successOutline"&gt;Success Outline&lt;/x-badge&gt;
                &lt;x-badge color="warningOutline"&gt;Warning Outline&lt;/x-badge&gt;
                &lt;x-badge color="infoOutline"&gt;Info Outline&lt;/x-badge&gt;
            </code>
        </pre>

    <h2 id="icons">Badges with Icons</h2>

    <p>
        Badges can be enhanced with icons. Simply specify the icon name in the <code class="inline">icon</code>
        attribute.
        Icons are positioned to the left by default, but you can set <code class="inline">icon_position="true"</code>
        to position
        the icon to the right of the badge.
    </p>

    <p>
        If you specify <b>icon_position="right"</b></b>, is positioned to the right of the badge or left side.
    </p>

    <div class="text-center space-x-4">
        <!-- Badge with icon on the right -->
        <x-badge color="info" icon="angle-right" icon_position="right">Next
            Chapter</x-badge>
    </div>
    <pre class="language-markup line-numbers">
            <code>
                &lt;x-badge
                    color="secondary"
                    icon="arrow-small-right"
                    icon_position="right"&gt;
                    Next Chapter
                &lt;/x-badge&gt;
            </code>
    </pre>

    <h2 id="icons">Badges with tooltip</h2>

    <p>
        Badges can be enhanced with tooltip. Simply specify the title in the <code class="inline">title</code>
        attribute.
    </p>

    <div class="text-center space-x-4">
        <x-badge color="info" icon="angle-right" icon_position="right" title="Next Chapter">Next
            Chapter</x-badge>
    </div>

    <pre class="language-markup line-numbers">
            <code>
                &lt;x-badge
                    color="secondary"
                    icon="arrow-small-right"
                    icon_position="right"
                    title="Next Chapter"&gt;
                    Next Chapter
                &lt;/x-badge&gt;
            </code>
    </pre>


    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Badge component.</p>

    <x-table-responsive>
        <x-table.thead>
            <x-table.th>Option</x-table.th>
            <x-table.th>Default</x-table.th>
            <x-table.th>Available Values</x-table.th>
        </x-table.thead>
        <x-table.tbody>
            <x-table.tr>
                <x-table.td>color</x-table.td>
                <x-table.td>primary</x-table.td>
                <x-table.td>Set the colour of the badge. The default is picked from what has been defined as the
                    primary colour in your tailwind.config.js file. Bcomponents sets the default to blue.
                    <br /><br><br />
                    <code class="inline">primary</code> <code class="inline">info</code>
                    <code class="inline">secondary</code>
                    <code class="inline">danger</code>
                    <code class="inline">warning</code>
                    <code class="inline">black</code>
                    <code class="inline">primaryOutline</code>
                    <code class="inline">infoOutline</code>
                    <code class="inline">secondaryOutline</code>
                    <code class="inline">dangerOutline</code>
                    <code class="inline">warningOutline</code>
                    <code class="inline">blackOutline</code>
                </x-table.td>
            </x-table.tr>

            <x-table.tr>
                <x-table.td>Link</x-table.td>
                <x-table.td><em>null</em></x-table.td>
                <x-table.td>
                    If set, the badge will be a link. The value of the attribute is the URL the badge should link to.
                </x-table.td>
            </x-table.tr>

            <x-table.tr>
                <x-table.td>icon</x-table.td>
                <x-table.td><em>blank</em></x-table.td>
                <x-table.td>Defines if the badge should have an icon. All Heroicons icon names can be
                    specified.</x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>icon_position</x-table.td>
                <x-table.td>false</x-table.td>
                <x-table.td>Defines if the icon should be positioned to the right of the badge. Takes effect only
                    is
                    <em>icon</em>
                    is not blank. <br><br /> <code class="inline">true</code> <code class="inline">false</code>
                </x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>title</x-table.td>
                <x-table.td>null</x-table.td>
                <x-table.td>
                    If set, the badge will have a tooltip. The value of the attribute is the text that will be
                    displayed in the tooltip.
                </x-table.td>
            </x-table.tr>
        </x-table.tbody>
    </x-table-responsive>

    <h3>Badge with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code class="prose-code">
            &lt;x-badge
                color="primary"
                class="mt-0"
                href="/"
                icon="lock-closed"
                icon_position="right"&gt;
                ...
            &lt;/x-badge&gt;
        </code>
    </pre>

    <x-slot:sideNavigation>

        <div class="flex items-center">
            <div class="dot"></div><a href="#secondary">Colored badge</a>
        </div>

        <div class="flex items-center">
            <div class="dot"></div><a href="#icons">With icons</a>
        </div>

        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>

    </x-slot:sideNavigation>
</div>
