<?php

use function Livewire\Volt\{state, layout, title, computed};
use Livewire\Volt\Component;

layout('layouts.guest');

$countries = computed(function () {
    return json_encode([['label' => 'Morocco', 'value' => 'ma'], ['label' => 'Algeria', 'value' => 'dz'], ['label' => 'Mauritania', 'value' => 'mt'], ['label' => 'Tunisia', 'value' => 'tn'], ['label' => 'Libya', 'value' => 'lb']]);
})->persist(seconds: 10);

?>
<div>
    <x-slot:title>Dropdown Component</x-slot:title>
    <x-slot:page_title>Dropdown</x-slot:page_title>
    <p>
        The Dropdown component allows for single selections from a list. This guide will walk you through its usage and
        features. The component is built with flexibility in mind, allowing you to customize its appearance and behavior
        to suit your needs.
    </p>

    <p>
        <x-alert type="error" closeIcon="false">
            Note: If you have multiple dropdown components on a page, ensure each one has a <b>unique</b> name to avoid
            erratic behaviour. This is because each component maintains its own state, and having unique names helps to
            prevent conflicts.
        </x-alert>
    </p>
    
    <h2 id="basic">Basic dropdown</h2>

    <p>
        The <code class="inline text-red-500">data</code> attribute is what really drives the Bcomponents dropdown
        component.
        This attribute expects an <code class="inline text-red-500">array</code> to be passed to it. Let's look at the
        basic structure of such an array using a list of five countries.
        We will build on this array structure as we go further in this documentation.
    </p>

    <pre class="language-js line-numbers">
        <code>
        &lt;?php
            $countries = json_encode[
                [ 'label' => 'Benin',         'value' => 'bj' ],
                [ 'label' => 'Burkina Faso',  'value' => 'bf' ],
                [ 'label' => 'Ghana',         'value' => 'gh' ],
                [ 'label' => 'Nigeria',       'value' => 'ng' ],
                [ 'label' => 'Kenya',         'value' => 'ke' ]
            ];
        </code>
    </pre>

    <p>
        This structure is all you need to render a Bcomponents dropdown.
        The default array keys used to render the dropdown are <code class="inline text-red-500">label</code> and <code
            class="inline text-red-500">value</code>.
    </p>
    <p>
        <x-dropdown name="country" :data="json_decode($this->countries)" />
    </p>
    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-dropdown
                name="country"
                :data="json_decode($countries)" /&gt;
        </code>
    </pre>

    <h3>Change Placeholder Text</h3>
    <p>
        <x-dropdown name="country2" placeholder="What is your nationality" :data="json_decode($this->countries)" />
    </p>
    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-dropdown
                name="country2"
                placeholder="What is your nationality"
                :data="json_decode($countries)" /&gt;
        </code>
    </pre>

    <h3>Change Width of Dropdown</h3>
    <p>
        <x-dropdown name="country2" width="64" :data="json_decode($this->countries)" />
    </p>
    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-dropdown
                name="country2"
                width="64"
                :data="json_decode($countries)" /&gt;
        </code>
    </pre>

    <p>
        Of course it is not feasible to always rewrite your arrays to use the <code class="inline">value</code> and
        <code class="inline">label</code> keys expected by the component. There is a solution.
        Assuming we changed our array to the structure below.
    </p>

    <pre class="language-js line-numbers">
        <code>
        &lt;?php
            $countries = json_encode[
                [ 'country' => 'Benin',         'code' => 'bj' ],
                [ 'country' => 'Burkina Faso',  'code' => 'bf' ],
                [ 'country' => 'Ghana',         'code' => 'gh' ],
                [ 'country' => 'Nigeria',       'code' => 'ng' ],
                [ 'country' => 'Kenya',         'code' => 'ke' ]
            ];
        </code>
    </pre>

    <p>
        We changed our array keys from <code class="inline">label</code> and <code class="inline">value</code> to <code
            class="inline">country</code> and <code class="inline">code</code>. To render the dropdown now, you just
        need to set the <code class="inline text-red-500">label</code> and <code
            class="inline text-red-500">value</code> attributes.
        Using our array above we will end up with <code class="inline text-red-500">label="country"</code> and <code
            class="inline text-red-500">value="code"</code>.
    </p>

    <pre class="language-markup line-numbers" data-line="3,4">
        <code>
            &lt;x-dropdown
                name="country"
                label="country"
                value="code"
                :data="json_decode($countries)" /&gt;
        </code>
    </pre>


    <h3>Selecting a Value By Default</h3>
    <p>
        Like with the regular HTML &lt;select&gt; field, it is possible to select a dropdown item by default when the
        page loads. Useful when editing records.
    </p>
    <p>
        <x-dropdown name="country-select" placeholder="What is your nationality" :data="json_decode($this->countries)"
            selected_value="gh" />
    </p>
    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-dropdown
                name="country-select"
                selected_value="gh"
                placeholder="What is your nationality"
                :data="json_decode($countries)" /&gt;
        </code>
    </pre>


    <h2 id="onChange">onChange Action</h2>
    <p>
        Every Bcomponents dropdown component you display creates as part of the dropdown html the following hidden
        form field
        <code class="inline text-red-500">&lt;input type="hidden" name="the-input-name-you-provide" /&gt;</code>.
        When you select an item from the dropdown, the hidden input field is updated with the value of what you
        selected. The value will be whatever you specified as your <code class="inline">value</code>. When you
        submit a form that has any Bcomponents dropdown, you can access the value of the dropdown by specifying the
        name you used on the dropdown. Consider the example below.
    </p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;form ...&gt;
            ...
            &lt;x-dropdown name="country" ... /&gt;
            &lt;/form&gt;
        </code>
    </pre>
    <p>
        After submitting the form the value of the country dropdown can be accessed using any of the following regular
        ways Laravel allows you to access data from the request class.
    </p>

    <pre class="language-js line-numbers">
        <code>
            $request->get('country');
            $request->input('country');
            $request->country;
        </code>
    </pre>




    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Dropdown component.</p>

    <x-table-responsive>
        <x-table.thead>
            <x-table.th>Option</x-table.th>
            <x-table.th>Default</x-table.th>
            <x-table.th>Available Values</x-table.th>
        </x-table.thead>
        <x-table.tbody>
            <tr>
                <td>name</td>
                <td>bw-dropdown</td>
                <td>This name is assigned to the hidden input created for the dropdown. The name is then accessed when
                    the
                    dropdown is submitted in a form.</td>
            </tr>
            <tr>
                <td>placeholder</td>
                <td>Select One</td>
                <td>Default text displayed on the dropdown</td>
            </tr>
            <tr>
                <td>width</td>
                <td>48</td>
                <td>Width of the dropdown in tailwindcss width normes <code class="inline">48</code> <code
                        class="inline">64</code> <code class="inline">full</code>
            </tr>
            <tr>
                <td>onChange</td>
                <td><em>blank</em></td>
                <td>Custom function to call when an item in the dropdown is selected. <b>This should just be the name of
                        the
                        custom function, without parenthesis</b>. For example <code
                        class="inline text-red-500">assignToProject</code>.
                    The component appends the selected <em>value</em> and <em>label</em> to the function call as <code
                        class="inline text-red-500">assignToProject(value, label)</code></td>
            </tr>
            <tr>
                <td>:data</td>
                <td>[]</td>
                <td>Array of elements to be displayed in the component. This should be an array. See above examples.
                    Ignore
                    this attribute if you prefer to use <code class="inline">data</code> instead.</td>
            </tr>
            <tr>
                <td>data</td>
                <td>[]</td>
                <td><b>Json encoded</b> array of elements to be displayed in the component. Ignore this attribute if you
                    prefer to use <code class="inline">:data</code> instead..</td>
            </tr>
            <tr>
                <td>value</td>
                <td>value</td>
                <td>Which key in your array should the dropdown pick its values from.</td>
            </tr>
            <tr>
                <td>label</td>
                <td>label</td>
                <td>Which key in your array should the dropdown pick its values from.</td>
            </tr>
         
            <tr>
                <td>required</td>
                <td>false</td>
                <td>Determines if an asterisk should be appended to the placeholder text to indicate the field is
                    required.
                    <br> <code class="inline">true</code> <code class="inline">false</code>.
                </td>
            </tr>
            <tr>
                <td>selected_value</td>
                <td><em>blank</em></td>
                <td>Determines which value from the array should be selected by default when the dropdown loads. Useful
                    when
                    editing content. If you want an item in your array whose value=13 to be selected, set <code
                        class="inline text-red-500">selected_value="13"</code>.</td>
            </tr>

        </x-table.tbody>
    </x-table-responsive>

    <h3>Dropdown with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;lets improve this dropdown with more logic, this is the wanted result build props and condtions based onthat --> 
                x-dropdown
                name="country"
                placeholder="What is your nationality"
                onChange="confirmSelection"
                width="64"
                :data="json_decode($countries)"
                value="code"
                label="country"
                required
                selected_value="1001" /&gt;
        </code>
    </pre>

    <x-slot:sideNavigation>
        <div class="flex items-center">
            <div class="dot"></div><a href="#basic">Basic dropdown</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#onChange">onChange action</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:sideNavigation>
    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-dropdown');
        </script>
    </x-slot>

</div>
