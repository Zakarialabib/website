<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Table Component</x-slot:title>
    <x-slot:page_title>Table</x-slot:page_title>

    <p>
        The Bcomponents table component is a versatile component that can be used to display tabular data in a visually
        appealing way. The table component is highly customizable and can be configured to suit your design needs. Below
        are some examples of how to use the table component.
    </p>

    <h2 id="basic">Basic Usage</h2>
    
    <p>
        The table component is made up of a <code class="inline text-red-500">&lt;x-table&gt;</code> tag that wraps the
        table. The table component has a slot for the table header and another slot for the table body. The table header
        slot is where you define the table headers, while the table body slot is where you define the table rows. Here is
        an example of a simple table component.
    </p>

    <x-table>
        <x-slot name="header">
            <th>Client Name</th>
            <th>Type</th>
            <th>Phone</th>
        </x-slot>
        <x-table.tbody> 
            <x-table.tr>
                <x-table.td>Alfred Rowe</x-table.td>
                <x-table.td>Outsourcing</x-table.td>
                <x-table.td>+233 244 123 456</x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>Michael K. Ocansey</x-table.td>
                <x-table.td>Tech</x-table.td>
                <x-table.td>+233 244 123 456</x-table.td>
            </x-table.tr>
        </x-table.tbody>
    </x-table>
    
    <h2 id="nogaps">No Gaps</h2>
    <p>By default the Bcomponents table rows are displayed with wide gaps to place more emphasis on each row and it’s
        content. Each row also has a default hover effect that highlights the left and right borders of the row. These
        can both be turned off. </p>
    <p>To remove the wide gaps between the table rows you need to set the divider attribute to thin, like this, <code
            class="inline text-red-500">divider="thin"</code>. </p>

    <x-table divider="thin">
        <x-slot name="header">
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
        </x-slot>
        <tr>
            <td>Alfred Rowe</td>
            <td>Outsourcing</td>
            <td>
                alfred@therowe.com
            </td>
        </tr>
        <tr>
            <td>Michael K. Ocansey</td>
            <td>Tech</td>
            <td>
                kabutey@gmail.com
            </td>
        </tr>
    </x-table>

    <pre class="language-markup line-numbers" data-line="2">
        <code>
             &lt;x-table
                divider="thin"&gt;
                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
            &lt;/x-table&gt;
        </code>
    </pre>

    <h2 id="nodivider">No Divider</h2>
    <p>It is also possible to completely turn off the divider lines.</p>
    <p>To remove the divider completely, set the divided attribute to false, like this, <code
            class="inline text-red-500">divided="false"</code>. </p>
    <p>
        <x-table divided="false">
            <x-slot name="header">
                <th>Name</th>
                <th>Department</th>
                <th>Email</th>
            </x-slot>
            <tr>
                <td>Alfred Rowe</td>
                <td>Outsourcing</td>
                <td>
                    alfred@therowe.com
                </td>
            </tr>
            <tr>
                <td>Michael K. Ocansey</td>
                <td>Tech</td>
                <td>
                    kabutey@gmail.com
                </td>
            </tr>
        </x-table>

        <pre class="language-markup line-numbers" data-line="2">
        <code>
             &lt;x-table
                divided="false"&gt;
                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
            &lt;/x-table&gt;
        </code>
    </pre>

    <h2 id="nohover">No Hover Effect</h2>
    <p>To remove the beautiful green side border effect when users hover on each row, set the hover attribute to false,
        like this, <code class="inline text-red-500">hover_effect="false"</code>. </p>
    <x-table hover_effect="false" divider="thin">
        <x-slot name="header">
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
        </x-slot>
        <tr>
            <td>Alfred Rowe</td>
            <td>Outsourcing</td>
            <td>
                alfred@therowe.com
            </td>
        </tr>
        <tr>
            <td>Michael K. Ocansey</td>
            <td>Tech</td>
            <td>
                kabutey@gmail.com
            </td>
        </tr>
    </x-table>

    <pre class="language-markup line-numbers" data-line="2">
        <code>
                &lt;x-table
                    hover_effect="false"
                    divider="thin"&gt;

                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
            &lt;/x-table&gt;
        </code>
    </pre>
    <h2 id="compact">Compact</h2>
    <p>If the table feels too airy and spaced, there is a <code class="inline text-red-500">compact="true"</code>
        attribute to tighten things up.</p>
    <x-table compact="true" divider="thin">
        <x-slot name="header">
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
        </x-slot>
        <tr>
            <td>Alfred Rowe</td>
            <td>Outsourcing</td>
            <td>
                alfred@therowe.com
            </td>
        </tr>
        <tr>
            <td>Michael K. Ocansey</td>
            <td>Tech</td>
            <td>
                kabutey@gmail.com
            </td>
        </tr>
    </x-table>
    <br />
    <pre class="language-markup line-numbers" data-line="2">
        <code>
                &lt;x-table
                    compact="true"
                    divider="thin"&gt;

                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
            &lt;/x-table&gt;
        </code>
    </pre>

    <h2 id="striped">Striped Table</h2>
    <p>Design experts argue that it is sometimes easier for users to visually scan tabular data if the table has striped
        rows. We are not challenging the experts. We’ve however made it possible for you to make your Bcomponents tables
        have striped rows. Set <code class="inline text-red-500">striped="true"</code> on the table component to get a
        striped table. </p>

    <x-table striped="true" divider="thin">
        <x-slot name="header">
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
        </x-slot>
        <tr>
            <td>Alfred Rowe</td>
            <td>Outsourcing</td>
            <td>
                alfred@therowe.com
            </td>
        </tr>
        <tr>
            <td>Arsone Gandote</td>
            <td>Outsourcing</td>
            <td>
                arson@outsourcing.com
            </td>
        </tr>
        <tr>
            <td>Michael K. Ocansey</td>
            <td>Tech</td>
            <td>
                kabutey@gmail.com
            </td>
        </tr>
        <tr>
            <td>Michel Lellatom</td>
            <td>Animations</td>
            <td>
                wecolossal@gmail.com
            </td>
        </tr>
        <tr>
            <td>Nora Abena Dankwa</td>
            <td>Animations</td>
            <td>
                norabenashine@gmail.com
            </td>
        </tr>
    </x-table>

    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-table
                striped="true"
                divider="thin"&gt;

                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
            &lt;/x-table&gt;
        </code>
    </pre>

    <h2 id="totals">Cells for Totals</h2>
    <p>Accountants have this interesting habit of double underlining their totals. If that’s something that interests
        you, apply the class <code class="inline">double-underline</code> to the <code class="inline">td</code> that
        holds the total value you want double underlined. </p>

    <x-table striped="true" divider="thin">
        <x-slot name="header">
            <th>Item</th>
            <th class="text-center">Quantity</th>
            <th class="text-right">Price (GHS)</th>
        </x-slot>
        <tr>
            <td>Office furniture</td>
            <td class="text-center">2</td>
            <td class="text-right">4,300.00</td>
        </tr>
        <tr>
            <td>HP Laser Jet Printer</td>
            <td class="text-center">1</td>
            <td class="text-right">3,000.00</td>
        </tr>
        <tr>
            <td colspan="2" class="text-right"></td>
            <td class="double-underline text-right">
                7,300.00
            </td>
        </tr>
    </x-table>

    <pre class="language-markup line-numbers" data-line="10">
        <code>
            &lt;x-table striped="true" divider="thin"&gt;

                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
                &lt;tr&gt;
                    &lt;td colspan="2" class="text-right"&gt;&lt;/td&gt;
                    &lt;td class="double-underline text-right"&gt;
                        7,300.00
                    &lt;/td&gt;
                &lt;/tr&gt;
            &lt;/x-table&gt;
        </code>
    </pre>

    <h2 id="shadow">Table With Drop Shadow</h2>
    <p>You can add a subtle shadow effect to your Bcomponents tables by setting <code
            class="inline text-red-500">has_shadow="true"</code>. </p>

    <x-table striped="true" divider="thin" has_shadow="true">
        <x-slot name="header">
            <th>Item</th>
            <th class="text-center">Quantity</th>
            <th class="text-right">Price (GHS)</th>
        </x-slot>
        <tr>
            <td>Office furniture</td>
            <td class="text-center">2</td>
            <td class="text-right">4,300.00</td>
        </tr>
        <tr>
            <td>HP Laser Jet Printer</td>
            <td class="text-center">1</td>
            <td class="text-right">3,000.00</td>
        </tr>
        <tr>
            <td colspan="2" class="text-right"></td>
            <td class="text-right">
                7,300.00
            </td>
        </tr>
    </x-table>
    <br />
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-table
                has_shadow="true"
                striped="true"
                divider="thin"&gt;

                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
            &lt;/x-table&gt;
        </code>
    </pre>

   
    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Table component.</p>

    <x-table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>name</td>
            <td>'tbl-'.uniqid()</td>
            <td>Name of the table. Useful if you want to target the table via Javascript. The name is added in the
                class="" attribute of the table.</td>
        </tr>
        <tr>
            <td>striped</td>
            <td>false</td>
            <td>Determines if the table rows are striped. Even rows get the stripes. The value should be passed as a
                string, not boolean. <br /><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>divided</td>
            <td>true</td>
            <td>
                Determines if the table rows show the lines that divide them. The value should be passed as a string,
                not boolean. <br /><code class="inline">true</code> <code class="inline">false</code>
            </td>
        </tr>
        <tr>
            <td>divider</td>
            <td>regular</td>
            <td>Determines how wide the gaps are between table rows. <br /><code class="inline">regular</code> <code
                    class="inline">thin</code></td>
        </tr>
        <tr>
            <td>hover_effect</td>
            <td>false</td>
            <td>Determines if the borders of the table rows light up when hovered over. The value should be passed as a
                string, not boolean.<br /><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>has_shadow</td>
            <td>true</td>
            <td>Determines if the table has a drop shadow effect. The value should be passed as a string, not
                boolean.<br /> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>compact</td>
            <td>false</td>
            <td>If set to true, the spacing between the TRs are reduced.<br /><code class="inline">true</code> <code
                    class="inline">false</code></td>
        </tr>
        <tr>
            <td>header</td>
            <td><em>blank</em></td>
            <td>This slot holds your table header information.</td>
        </tr>
   
    </x-table>

    <h3>Table with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-table
                class="w-/1-2 mx-auto"
                striped="true"
                divided="true"
                divider="thin"
                has_shadow="true"
                compact="true"
                hover_effect="true"&gt;

                &lt;x-table.thead&gt;
                    ...
                &lt/x-table.thead&gt;

                &lt;x-table.tbody&gt;
                ...
                &lt;/x-table.tbody&gt;

            &lt;/x-table&gt;
        </code>
    </pre>

    <x-slot:side_nav>
        <div class="flex items-center">
            <div class="dot"></div><a href="#nogaps">No Gaps</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#nodivider">No divider</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#nohover">No hover effect</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#compact">Reduce Paddings</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#striped">Striped table</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#totals">Cells for totals</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#shadow">With drop shadow</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#dynamic">Dynamic data</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:side_nav>
    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-table');
        </script>
    </x-slot>

</div>
