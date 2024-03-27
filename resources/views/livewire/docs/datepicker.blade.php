<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Datepicker Component</x-slot:title>
    <x-slot:page_title>Datepicker</x-slot:page_title>

    <p>
        The datepicker component is used to select a date. It can be used as a single datepicker or a range datepicker.
        using Pikaday, and momentjs libraries, the datepicker component is able to handle date selection and formatting.
    </p>

    <div class="p-5 bg-white text-gray-500">
        <x-datepicker />
    </div>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-datepicker  /&gt;
        </code>
    </pre>

    <p>
        By default the datepicker fills up the width of its parent container. You can however specify a width of your
        choice using the datepicker's <code class="inline">css</code> attribute.
    </p>
    <p>You can also change the placeholder text from the default <code class="inline">Select a date</code>.</p>
  
    <div class="w-40">
        <x-datepicker placeholder="Birth Date" has_label="true" />
    </div>

    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;div class="w-40"&gt;
                &lt;x-datepicker placeholder="Birth Date"  /&gt;
            &lt;/div&gt;
        </code>
    </pre>

    <h2 id="range">Range Datepicker</h2>
    <p>
        This range datepicker isn't your typical date range selection you will find on airline websites.
        This option simply saves you from manually embedding the datepicker two times.
        Specifying <code class="inline text-red-500">type="range"</code> will create two separate datepicker boxes for
        start and end dates.
    </p>
  
    <div class="p-5 bg-white text-gray-500">
        <x-datepicker type="range" />
    </div>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-datepicker type="range"  /&gt;
        </code>
    </pre>

    <p>
        The default placeholder texts for the range datepicker are <b>From</b> and <b>To</b>. These can however, be
        modified using the <code class="inline text-red-500">label_start_date</code> and <code
            class="inline text-red-500">label_end_date</code> attributes. These attributes only work if <code
            class="inline text-red-500">type="range"</code>.
    </p>

    <div class="p-5 bg-white text-gray-500">
        <x-datepicker type="range" label_start_date="start date" label_end_date="end date" />
    </div>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-datepicker
                type="range"
                label_start_date="start date"
                label_end_date="end date" /&gt;
        </code>
    </pre>

    <h3>Show As a Required Field</h3>
    <p>An asterisk is appended to the placeholder text when <code class="inline text-red-500">required="true"</code>.
    </p>

    <div class="p-5 bg-white text-gray-500">
        <x-datepicker css="!w-44" required="true" />
    </div>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-datepicker required="true"  /&gt;
        </code>
    </pre>

    <h3>Default Label </h3>
    <p>When <code class="inline text-red-500">defualt_label="Select a date"</code> is set, the placeholder text is
        displayed as a label above the datepicker input.</p>

    <div class="p-5 bg-white text-gray-500">
        <x-datepicker css="!w-44" default_label="Date of birth" />
    </div>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-datepicker default_label="Date of birth"  /&gt;
        </code>
    </pre>

    <h2 id="formats">Date Formats</h2>
    <p>
        You can specify how you want dates selected in the datepicker to be displayed. There are four options to pick
        from.
        The default format is <code class="inline text-red-500">format="YYYY-MM-DD"</code>. When using a range
        datepicker, the format you specify is applied to both datepickers.
    </p>

    <div class="p-5 bg-white text-gray-500">
        <x-datepicker name="date1" type="range" format="DD-MM-YYYY" />
    </div>

    <pre class="language-markup">
        <code>
            &lt;x-datepicker name="date1" type="range" format="DD-MM-YYYY" /&gt;
        </code>
    </pre>

    <div class="p-5 bg-white text-gray-500">
        <x-datepicker name="date2" format="MM-DD-YYYY" />
    </div>

    <pre class="language-markup">
        <code>
            &lt;x-datepicker name="date2" format="MM-DD-YYYY" /&gt;
        </code>
    </pre>

    <div class="p-5 bg-white text-gray-500">
        <x-datepicker name="date3" format="D d M, Y" type="range" />
    </div>

    <pre class="language-markup">
        <code>
            &lt;x-datepicker name="date3" format="D d M, Y" type="range" /&gt;
        </code>
    </pre>

    <div class="p-5 bg-white text-gray-500">
        <x-datepicker name="date4" format="YYYY-MM-DD" />
    </div>

    <pre class="language-markup">
        <code>
            &lt;x-datepicker name="date4" format="YYYY-MM-DD" /&gt;
        </code>
    </pre>


    <h2 id="defaults">With Default Values</h2>
    <p>
        There are times you will want the datepicker to load prepopulated with a default value. This is useful when in
        edit mode or when using filters and you want to show the user what dates they filtered by.
    </p>

    <div class="p-5 bg-white text-gray-500">
        <x-datepicker css="!w-44" default_date="2021-12-03" />
    </div>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-datepicker default_date="2021-12-03"  /&gt;
        </code>
    </pre>

    <p>
        It is possible to have default dates for a range datepicker also.
    </p>

    <div class="p-5 bg-white text-gray-500">
        <x-datepicker type="range" default_start_date="2021-12-03" default_end_date="2022-01-03" />
    </div>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-datepicker
                type="range"
                default_start_date="2021-12-03"
                default_end_date="2022-01-03"  /&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Datepicker component.</p>

    <x-table-responsive>
        <x-table.thead>
            <x-table.th>Option</x-table.th>
            <x-table.th>Default</x-table.th>
            <x-table.th>Available Values</x-table.th>
        </x-table.thead>
        <x-table.tbody>
            <tr>
                <td>name</td>
                <td>bw-datepicker</td>
                <td>This name can be accessed when the input is submitted in the form. The name is also available as
                    part of the css classes.</td>
            </tr>
            <tr>
                <td>type</td>
                <td>single</td>
                <td><code class="inline">single</code> <code class="inline">range</code></td>
            </tr>
            <tr>
                <td>default_label</td>
                <td><em>blank</em></td>
                <td>Text to be displayed above the datepicker input.</td>
            </tr>
            <tr>
                <td>default_date</td>
                <td><em>blank</em></td>
                <td>In case you are editing a form, the value passed will be set on the value attribute of the
                    datepicker input.
                    <code class="inline text-red-500">&lt;input type="text" <b>value=""</b> ../&gt;</code>
                </td>
            </tr>
            <tr>
                <td>default_start_date</td>
                <td><em>blank</em></td>
                <td>Default date to set for the <em>From</em> date when using the range datepicker.</td>
            </tr>
            <tr>
                <td>default_end_date</td>
                <td><em>blank</em></td>
                <td>Default date to set for the <em>To</em> date when using the range datepicker.</td>
            </tr>
            <tr>
                <td>label_start_date</td>
                <td>From</td>
                <td>Placeholder text to display for the <code>From</code> date. Applicable only to range datepickers.
                </td>
            </tr>
            <tr>
                <td>label_end_date</td>
                <td>To</td>
                <td>Placeholder text to display for the <code>To</code> date. Applicable only to range datepickers.</td>
            </tr>
            <tr>
                <td>format</td>
                <td>YYYY-MM-DD</td>
                <td>How date should be formatted.<code class="inline">YYYY-MM-DD</code>
                    <code class="inline">DD-MM-YYYY</code> <code class="inline">MM-DD-YYYY</code>
                    <code class="inline">D d M, Y</code>
                </td>
            </tr>
            <tr>
                <td>placeholder</td>
                <td>Select a date</td>
                <td>Placeholder text to display</td>
            </tr>
            <tr>
                <td>required</td>
                <td>false</td>
                <td>Determines if the placeholder text should have an asterisk appended to it or not. Value needs to be
                    set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code>
                </td>
            </tr>
            <tr>
                <td>class</td>
                <td>bw-datepicker</td>
                <td>Any additonal css classes can be added using this attribute.</td>
            </tr>
        </x-table.tbody>
    </x-table-responsive>

    <h3>Datepicker with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-datepicker
                name="dateOfBirth"
                type="single"
                default_label="Date of birth"
                required="false"
                placeholder="Date of birth"
                default_date="2021-12-03"
                default_start_date="2021-12-03"
                default_end_date="2022-01-03"
                label_start_date="From"
                label_end_date="To"
                class="shadow-sm" /&gt;
        </code>
    </pre>

    <x-slot:side_nav>
        <div class="flex items-center">
            <div class="dot"></div><a href="#range">Range datepicker</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#formats">Date formats</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#defaults">With default values</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-datepicker');
        </script>
    </x-slot>

</div>
