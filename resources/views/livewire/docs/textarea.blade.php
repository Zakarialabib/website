<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Textarea Component</x-slot:title>
    <x-slot:page_title>Textarea</x-slot:page_title>

    <p>
        The Textarea component is a simple wrapper around the HTML textarea element. It provides a clean and consistent
        way to create textarea elements with optional labels and placeholders. The component is built with flexibility
        in mind, allowing you to customize its appearance and behavior to suit your needs.
    </p>
    <p><x-textarea name="comment" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-textarea  /&gt;
        </code>
    </pre>
    <h3>Add Placeholder Text</h3>
    <p><x-textarea placeholder="Comment" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-textarea placeholder="Comment"  /&gt;
        </code>
    </pre>
    <h3>With Labels</h3>
    <p>
        The label attribute is used to add a label to the textarea element. The label is displayed above the textarea
        element.
    </p>
    <p><x-textarea label="Comment" /></p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-textarea label="Comment"  /&gt;
        </code>
    </pre>
    <h3>Required Fields</h3>
    <p>
        This either adds a red asterisk sign to the placeholder text or a red star to the label of the textarea field.
    </p>
    <p><x-textarea label="Comment" required /></p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-textarea required label="Comment"  /&gt;
        </code>
    </pre>
  
    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Textarea component.</p>

    <x-table-responsive>
        <x-table.thead>
            <x-table.th>Option</x-table.th>
            <x-table.th>Default</x-table.th>
            <x-table.th>Available Values</x-table.th>
        </x-table.thead>
        <x-table.tbody>

            <tr>
                <td>name</td>
                <td>textarea-uniqid()</td>
                <td>Unique name to identify the textarea element by. Useful for retrieving value from the textarea when
                    it is submitted in a form. The component by default uses a random name prefixed with 'textarea-'.
                </td>
            </tr>
            <tr>
                <td>label</td>
                <td><em>blank</em></td>
                <td>Label that describes the textarea element. Example: Full name</td>
            </tr>

            <tr>
                <td>required</td>
                <td>false</td>
                <td>Specifies if the textarea element is required or not. When required, a red asterisk is displayed
                    next to the placeholder or label.<br /><br /> <code class="inline">true</code> <code
                        class="inline">false</code></td>
            </tr>

            <tr>
                <td>placeholder</td>
                <td><em>blank</em></td>
                <td>Placeholder text to display in the textarea element. </td>
            </tr>
            <tr>
                <td>rows</td>
                <td>3</td>
                <td>Specifies the height of the textarea in rows. Can be any positive whole number. </td>
            </tr>
        </x-table.tbody>
    </x-table-responsive>

    <p>&nbsp;</p>
    <h3 class="pb-2 ">Textarea with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-textarea
                name="message"
                wire:model="message"
                label="Enter message"
                placeholder=""
                required
                rows="5"
                 /&gt;
        </code>
    </pre>


    <x-slot:sideNavigation>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:sideNavigation>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-textarea');
        </script>
    </x-slot>

</div>
