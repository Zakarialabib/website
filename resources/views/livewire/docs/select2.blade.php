<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;
use function Livewire\Volt\{computed};

layout('layouts.guest');

state('code');

$countries = computed(function () {
    return [['label' => 'Morocco', 'value' => 'ma'], ['label' => 'Algeria', 'value' => 'dz'], ['label' => 'Mauritania', 'value' => 'mt'], ['label' => 'Tunisia', 'value' => 'tn'], ['label' => 'Libya', 'value' => 'lb']];
})->persist(seconds: 10);

?>
<div>
    <x-slot:title>Select Component</x-slot:title>
    <x-slot:page_title>Select</x-slot:page_title>
    <p>
        The Select2 component allows for single or multiple selections from a list. This guide will walk you through its
        usage and features. The component is built with flexibility in mind, allowing you to customize its appearance
        and behavior to suit your needs.
    </p>
    <p>
        <x-alert type="error" closeIcon="false">
            Note: If you have multiple select2 components on a page, ensure each one has a <b>unique</b> name to avoid
            erratic behaviour. This is because each component maintains its own state, and having unique names helps to
            prevent conflicts.
        </x-alert>
    </p>

    <h2 id="basic">Basic Usage</h2>
    <p>
        The <code class="inline text-red-500">data</code> attribute is the driving force behind the Select2 component. It
        expects an <code class="inline text-red-500">array</code> to be passed to it. Here's an example using a list of
        countries:
    </p>

    <pre class="language-js line-numbers">
        <code>
        &lt;?php
            $countries = [
                [ 'label' => 'Morocco',       'value' => 'ma' ],
                [ 'label' => 'Algeria',  'value' => 'dz' ],
                [ 'label' => 'Mauritania',         'value' => 'mt' ],
                [ 'label' => 'Tunisia',       'value' => 'tn' ],
                [ 'label' => 'Libya',         'value' => 'lb' ]
            ];
        </code>
    </pre>

    <p>
        This structure is all you need to render a Select2 component. The default array keys used are <code
            class="inline text-red-500">label</code> and <code class="inline text-red-500">value</code>. The 'label' key
        is used for the display text in the dropdown, while the 'value' key is used as the actual value that gets
        submitted.
    </p>
    <div class="p-5 bg-white">
        <x-select2 name="country" label="country" :options="$this->countries" />
    </div>

    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-select2
                name="country"
                label="country"
                :options="$countries" /&gt;
        </code>
    </pre>

    <h3>Change Placeholder Text</h3>
    <p>
        The placeholder text can be customized using the 'placeholder' attribute. This text will be displayed when no
        option is selected.
    </p>
    <div class="p-5 bg-white">
        <x-select2 name="country1" label="country" placeholder="What is your nationality" :options="$this->countries" />
    </div>

    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-select2
                name="country1"
                label="country"
                placeholder="What is your nationality"
                :options="$countries" /&gt;
        </code>
    </pre>

    <p>
        Just for some perspective, what we are trying to mimic here is the html implementation of a <code
            class="inline text-red-500">select</code> form element. However, the Select2 component provides more
        features and customization options than a standard select element.
    </p>

    <h3>Required Field</h3>
    <p>
        Setting a select as required appends a red asterisk to the placeholder text. This can be useful for form
        validation, as it visually indicates to the user that they must make a selection.
    </p>
    <div class="p-5 bg-white">
        <x-select2 name="country-select2" label="country" placeholder="What country you live in ?" required
            :options="$this->countries" />
    </div>

    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-select2
                name="country-select2"
                required
                placeholder="What country you live in ?"
                :options="$countries" /&gt;
        </code>
    </pre>

    <h2 id="multiple">Select Multiple Items</h2>
    <p>
        There are instances where you need to select more than one item from the select component. This is
        possible
        by
        setting the attribute
        <code class="inline text-red-500">multiple="tr</code>. Unlike the single select, multiple selects do not
        automatically close when you select items.
        This is because we technically do not know how many items you are selecting and if you are done.
        To close a multiple select just click anywhere on the page outside the component. This feature can be
        useful
        when you want to allow users to select multiple options, such as in a multi-tag selection or
        multi-category
        selection scenario.
    </p>
    <p>
        Left and right navigation arrows are displayed only when some of the selected items are out of view. You
        can
        ignore the arrows and scroll left and right using your mouse.
        This will be a 2 finger scroll on Macs. These navigation arrows provide a user-friendly way to navigate
        through
        the selected items, especially when there are many selected items that cannot all be displayed at once.
    </p>
    <div class="p-5 bg-white">
        <x-select2 name="country-multi" label="countries" multiple :options="$this->countries" />
    </div>
    <pre class="language-markup line-numbers" data-line="7">
        <code>
            &lt;x-select2
                name="country-multi"
                label="country"
                wire:model="code"
                multiple
                :options="$countries" /&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Dropdown
        component. Each
        attribute can be used to customize the behavior and appearance of the component to suit your needs.
    </p>

    <x-table-responsive>
        <x-table.thead>
            <x-table.th>Option</x-table.th>
            {{-- <x-table.th>Default</x-table.th> --}}
            <x-table.th>Available Values</x-table.th>
        </x-table.thead>
        <x-table.tbody>
            <x-table.tr>
                <x-table.td>name</x-table.td>
                <x-table.td>The name attribute of the select element. This is used to reference the form data after the form is submitted.</x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>placeholder</x-table.td>
                <x-table.td>The placeholder text displayed in the select box when no option is selected.</x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>wire:model.live</x-table.td>
                <x-table.td>Creates a two-way data binding between the select element and the component's property. The .live modifier updates the component's property in real time as the user types.</x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>label</x-table.td>
                <x-table.td>The label for the select element. This is usually displayed above the select box.</x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>disabled</x-table.td>
                <x-table.td>Disables the select box. A disabled select box cannot be interacted with or submitted.</x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>:options</x-table.td>
                <x-table.td>The options for the select box. This is an array of key-value pairs, where the key is the option value and the value is the option text.</x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>required</x-table.td>
                <x-table.td>Makes the select box a required field. The form will not submit unless an option is selected.</x-table.td>
            </x-table.tr>
        </x-table.tbody>
    </x-table-responsive>

    <h3>Select with all attributes defined</h3>
    <p>
        Here's an example of a Select2 component with all possible attributes defined. This example
        showcases the
        flexibility and customization options of the Select2 component.
    </p>
    
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-select2
                name="country"
                placeholder="What is your nationality"
                wire:model.live="code"
                label="country"
                disabled
                :options="$countries"
                required
            /&gt;
        </code>
    </pre>

    <x-slot:sideNavigation>
        <div class="flex items-center">
            <div class="dot"></div><a href="#basic">Basic usage</a>
        </div>

        <div class="flex items-center">
            <div class="dot"></div><a href="#multiple">Multiple select</a>
        </div>

        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:sideNavigation>
    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-select');
        </script>
    </x-slot>
</div>
