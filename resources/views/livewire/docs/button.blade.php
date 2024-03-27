<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Button Component</x-slot:title>
    <x-slot:page_title>Button</x-slot:page_title>

    <p>
        The default primary colour theme for Bcomponents buttons is blue.
        It is possible to set a colour attribute to display our button in different colours. These are however a
        definite list of colours.
    </p>
    <p>
        By default the component uses the <code class="inline">&lt;button&gt;</code> tag to build the button. If you find
        yourself in the category of developers who prefer to use the <code class="inline">&lt;a&gt;</code> tag for their
        buttons, you will need to specify
        the attribute <code class="inline text-red-500">tag="a"</code>.
    </p>
    <h2 id="type">Type Button</h2>
    <div class="text-center p-4">
        <x-button type="button" color="primary">Subscribe Now</x-button>

        <x-button-fullscreen />

    </div>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-button type="button" color="primary" &gt;
                subscribe now
            &lt;/x-button&gt;
        </code>
    </pre>
    <h2 id="type">Type Link</h2>
    <div class="text-center p-4">
        <x-button href="/" color="primary">Subscribe Now</x-button>
    </div>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-button href="/" color="primary" &gt;
                subscribe now
            &lt;/x-button&gt;
        </code>
    </pre>
    <h2 id="type">Type Submit</h2>
    <div class="text-center p-4">
        <x-button type="submit" color="primary">Subscribe Now</x-button>
    </div>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-button type="submit" color="primary" &gt;
                subscribe now
            &lt;/x-button&gt;
        </code>
    </pre>
    <h2>Disabled Button</h3>
        <div class="text-center p-4">
            <x-button type="button" color="secondary" disabled="true">Disabled Button</x-button>
        </div>
        <pre class="language-markup line-numbers">
            <code>
                &lt;x-button type="button" color="secondary" disabled="true"&gt;
                    disabled button
                &lt;/x-button&gt;
            </code>
        </pre>

        <h2 id="coloured">Colored Button</h2>
        <p>
            Only primary buttons can take on different colors. Below are examples of buttons with different colors.
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-3 justify-center text-center gap-4 mt-4">
            <x-button color="primary">Primary</x-button>
            <x-button color="secondary">Secondary</x-button>
            <x-button color="danger">Danger</x-button>
            <x-button color="alert">Alert</x-button>
            <x-button color="success">Success</x-button>
            <x-button color="warning">Warning</x-button>
            <x-button color="info">Info</x-button>
        </div>

        <pre class="language-markup line-numbers" data-line="1,5,9,13,17,21,25,29">
            <code>
                &lt;x-button color="primary"&gt;Primary&lt;/x-button&gt;
                &lt;x-button color="seconary"&gt;Secondary&lt;/x-button&gt;
                &lt;x-button color="danger"&gt;Danger&lt;/x-button&gt;
                &lt;x-button color="alert"&gt;Alert&lt;/x-button&gt;
                &lt;x-button color="success"&gt;Success&lt;/x-button&gt;
                &lt;x-button color="warning"&gt;Warning&lt;/x-button&gt;
                &lt;x-button color="info"&gt;Info&lt;/x-button&gt;
            </code>
        </pre>
        <h2 id="coloured">Outlined Button</h2>
        <p>
            Only primary buttons can take on different colors. Below are examples of buttons with different colors.
        </p>
        <div class="grid grid-cols-2 sm:grid-cols-3 justify-center text-center gap-4 mt-4">
            <x-button color="primaryOutline">Primary Outline</x-button>
            <x-button color="secondaryOutline">Secondary Outline</x-button>
            <x-button color="dangerOutline">Danger Outline</x-button>
            <x-button color="alertOutline">Alert Outline</x-button>
            <x-button color="successOutline">Success Outline</x-button>
            <x-button color="warningOutline">Warning Outline</x-button>
            <x-button color="infoOutline">Info Outline</x-button>
        </div>
        <pre class="language-markup line-numbers" data-line="1,5,9,13,17,21,25,29">
            <code>
                &lt;x-button color="primaryOutline"&gt;Primary Outline&lt;/x-button&gt;
                &lt;x-button color="seconaryOutline"&gt;Secondary Outline&lt;/x-button&gt;
                &lt;x-button color="dangerOutline"&gt;Danger Outline&lt;/x-button&gt;
                &lt;x-button color="alertOutline"&gt;Alert Outline&lt;/x-button&gt;
                &lt;x-button color="successOutline"&gt;Success Outline&lt;/x-button&gt;
                &lt;x-button color="warningOutline"&gt;Warning Outline&lt;/x-button&gt;
                &lt;x-button color="infoOutline"&gt;Info Outline&lt;/x-button&gt;
            </code>
        </pre>

        <h2 id="icons">Buttons with Icons</h2>

        <p>
            Buttons can be enhanced with icons. Simply specify the icon name in the <code class="inline">icon</code>
            attribute.
            Icons are positioned to the left by default, but you can set <code
                class="inline">icon_position="true"</code>
            to position
            the icon to the right of the button.
        </p>

        <p>
            If you specify <b>icon_position="right"</b></b>, is positioned to the right of the button or left side.
        </p>

        <div class="text-center">
            <!-- Button with icon on the left -->
            <x-button icon="refresh">Refresh page</x-button>
        </div>
        <pre class="language-markup line-numbers">
            <code>
                &lt;x-button type="button" color="info" icon="refresh"&gt;
                    Refresh Page
                &lt;/x-button&gt;
            </code>
        </pre>

        <div class="text-center space-x-4">
            <!-- Button with icon on the right -->
            <x-button type="button" color="info" icon="angle-right" icon_position="right">Next
                Chapter</x-button>
        </div>
        <pre class="language-markup line-numbers">
            <code>
                &lt;x-button
                    type="button"
                    color="secondary"
                    icon="arrow-small-right"
                    icon_position="right"&gt;
                    Next Chapter
                &lt;/x-button&gt;
            </code>
        </pre>

        <h2 id="attributes">Full List Of Attributes</h2>
        <p>The table below shows a comprehensive list of all the attributes available for the Button component.</p>

        <x-table-responsive>
            <x-table.thead>
                <x-table.th>Option</x-table.th>
                <x-table.th>Default</x-table.th>
                <x-table.th>Available Values</x-table.th>
            </x-table.thead>
            <x-table.tbody>
                <x-table.tr>
                    <x-table.td>type</x-table.td>
                    <x-table.td>button</x-table.td>
                    <x-table.td><code class="inline">button</code><code class="inline">submit</code> <code
                            class="inline">href</code>
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>size</x-table.td>
                    <x-table.td>regular</x-table.td>
                    <x-table.td><code class="inline">sm</code> <code class="inline">md</code> <code
                            class="inline">lg</code>
                        <code class="inline">xl</code></x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>name</x-table.td>
                    <x-table.td><em>blank</em></x-table.td>
                    <x-table.td>This name is added to the button's <code class="inline">class</code> attribute just for
                        convenience.
                        This name can then be used to access the button via javascript or css.</x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>color</x-table.td>
                    <x-table.td>primary</x-table.td>
                    <x-table.td>Set the colour of the button. The default is picked from what has been defined as the
                        primary
                        colour
                        in
                        your tailwind.config.js file. Bcomponents sets the default to blue. <br /><br><br /> <code
                            class="inline">primary</code> <code class="inline">info</code>
                        <code class="inline">secondary</code>
                        <code class="inline">danger</code>
                        <code class="inline">warning</code> <code class="inline">black</code>
                        <code class="inline">primaryOutline</code>
                        <code class="inline">infoOutline</code>
                        <code class="inline">secondaryOutline</code>
                        <code class="inline">dangerOutline</code>
                        <code class="inline">warningOutline</code>
                        <code class="inline">blackOutline</code>

                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>type</x-table.td>
                    <x-table.td>string</x-table.td>
                    <x-table.td>By default the button component is rendered as <code
                            class="inline text-red-500">&lt;button
                            type="button"...</code>.
                        or submit or href <code class="inline text-red-500">&lt;button type="submit"...</code>. .
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>disabled</x-table.td>
                    <x-table.td>false</x-table.td>
                    <x-table.td>Defines if the button should be disabled or enabled. <br><br /> <code
                            class="inline">true</code>
                        <code class="inline">false</code>
                    </x-table.td>
                </x-table.tr>

                <x-table.tr>
                    <x-table.td>icon</x-table.td>
                    <x-table.td><em>blank</em></x-table.td>
                    <x-table.td>Defines if the button should have an icon. All Heroicons icon names can be
                        specified.</x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>icon_position</x-table.td>
                    <x-table.td>false</x-table.td>
                    <x-table.td>Defines if the icon should be positioned to the right of the button. Takes effect only
                        is
                        <em>icon</em>
                        is not blank. <br><br /> <code class="inline">true</code> <code class="inline">false</code>
                    </x-table.td>
                </x-table.tr>
            </x-table.tbody>
        </x-table-responsive>

        <h3>Button with all attributes defined</h3>
        <pre class="language-markup line-numbers">
        <code class="prose-code">
            &lt;x-button
                type="button"
                color="primary"
                name="btn-subscribe"
                disabled="false"
                class="mt-0"
                icon="lock-closed"
                icon_position="right"&gt;
                ...
            &lt;/x-button&gt;
        </code>
    </pre>

        <x-slot:side_nav>
            <div class="flex items-center">
                <div class="dot"></div><a href="#type">Buttons Types</a>
            </div>
            <div class="flex items-center">
                <div class="dot"></div><a href="#secondary">Colored button</a>
            </div>
            <div class="flex items-center">
                <div class="dot"></div><a href="#icons">With icons</a>
            </div>
            <div class="flex items-center">
                <div class="dot"></div><a href="#events">Button events</a>
            </div>

            <div class="flex items-center">
                <div class="dot"></div><a href="#attributes">Full list of attributes</a>
            </div>
        </x-slot:side_nav>
</div>
