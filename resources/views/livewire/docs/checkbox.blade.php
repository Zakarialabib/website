<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Checkbox Component</x-slot:title>
    <x-slot:page_title>Checkbox</x-slot:page_title>

    <p>
        Display a checkbox with or without a label. The default checkbox colour is blue but there are nine colours
        available to choose from.
    </p>

    <x-checkbox />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-checkbox  /&gt;
        </code>
    </pre>

    <x-checkbox label="I agree to the terms and conditions" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-checkbox
                label="I agree to the terms and conditions"  /&gt;
        </code>
    </pre>

    <x-checkbox label="I am checked by default" checked="true" />
    <pre class="language-markup line-numbers" data-line="3">
        <code>
            <code>
            &lt;x-checkbox
                label="I am checked by default"
                checked="true"  /&gt;
        </code>
        </code>
    </pre>
  
    <x-checkbox label="I am required by default" required="true" />
    <pre class="language-markup line-numbers" data-line="3">
        <code>
            <code>
            &lt;x-checkbox
                label="I am required by default"
                required="true"  /&gt;
        </code>
        </code>
    </pre>

    <x-checkbox label="I am disabled" disabled="true" /> &nbsp;&nbsp;
    <x-checkbox label="I am checked and disabled" disabled="true" checked="true" />
    <pre class="language-markup line-numbers" data-line="3">
        <code>
            <code>
            &lt;x-checkbox
                label="I am disabled"
                disabled="true"  /&gt;
        </code>
        </code>
    </pre>

    <h2 id="coloured">Coloured Checkboxes</h2>
    <p>
        Like most of the Bcomponents components, checkboxes also come in nine colours to enable the components sit
        better in most designs with various colour schemes.
    </p>
    <div class="grid grid-cols-3">
        <div>
            <x-checkbox color="red" checked="true" label="I am a red checkbox" />
            <x-checkbox color="yellow" checked="true" label="I am a yellow checkbox" />
            <x-checkbox color="green" checked="true" label="I am a green checkbox" />
        </div>
        <div>
            <x-checkbox color="purple" checked="true" label="I am a purple checkbox" />
            <x-checkbox color="orange" checked="true" label="I am a orange checkbox" />
            <x-checkbox color="blue" checked="true" label="I am a blue checkbox" />
        </div>
    </div>

    <pre class="language-markup line-numbers" data-line="2,7,12,17,22,27,32,37,42">
        <code>
            &lt;x-checkbox
                color="red"
                checked="true"
                label="I am a red checkbox" /&gt;

            &lt;x-checkbox
                color="yellow"
                checked="true"
                label="I am a yellow checkbox" /&gt;

            &lt;x-checkbox
                color="green"
                checked="true"
                label="I am a green checkbox" /&gt;

            &lt;x-checkbox
                color="purple"
                checked="true"
                label="I am a purple checkbox" /&gt;

            &lt;x-checkbox
                color="orange"
                checked="true"
                label="I am a orange checkbox" /&gt;

            &lt;x-checkbox
                color="blue"
                checked="true"
                label="I am a blue checkbox" /&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Checkbox component.</p>

    <x-table-responsive>
        <x-table.thead>
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-table.thead>
        <x-table.tbody>
            <tr>
                <td>name</td>
                <td>checkbox</td>
                <td>This name can be accessed when the checkbox is submitted in the form. The name is also available as
                    part
                    of the css classes.</td>
            </tr>
            <tr>
                <td>label</td>
                <td><em>blank</em></td>
                <td>Text to be displayed next to the checkbox.</td>
            </tr>
            <tr>
                <td>value</td>
                <td><em>blank</em></td>
                <td>In case you are editing a form, the value passed will be set on the value attribute of the checkbox.
                    <code class="inline text-red-500">&lt;input type="checkbox" <b>value=""</b> ../&gt;</code>
                </td>
            </tr>
            <tr>
                <td>required</td>
                <td>false</td>
                <td>Specifies whether the checkbox is checked or not. Value needs to be set as a string not boolean.<br>
                    <code class="inline">true</code> <code class="inline">false</code>
                </td>
            </tr>
            <tr>
                <td>checked</td>
                <td>false</td>
                <td>Specifies whether the checkbox is checked or not. Value needs to be set as a string not boolean.<br>
                    <code class="inline">true</code> <code class="inline">false</code>
                </td>
            </tr>
            <tr>
                <td>disabled</td>
                <td>false</td>
                <td>Specifies whether the checkbox is disabled or not. Value needs to be set as a string not
                    boolean.<br>
                    <code class="inline">true</code> <code class="inline">false</code>
                </td>
            </tr>
            <tr>
                <td>class</td>
                <td>bw-checkbox</td>
                <td>Any additional css classes can be added using this attribute.</td>
            </tr>
        </x-table.tbody>
    </x-table-responsive>

    <h3>Checkbox with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-checkbox
                label="I agree to the terms and conditions"
                checked="false"
                disabled="false"
                required="false"
                name="tnc"
                value="yes"
                class="shadow-sm" /&gt;
        </code>
    </pre>

    <x-slot:sideNavigation>
        <div class="flex items-center">
            <div class="dot"></div><a href="#coloured">Coloured Checkboxes</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:sideNavigation>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-checkbox');
        </script>
    </x-slot>

</div>
