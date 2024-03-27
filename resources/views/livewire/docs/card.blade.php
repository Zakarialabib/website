<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Card Component</x-slot:title>
    <x:slot:page_title>Card</x:slot:page_title>

    <p>
        The Card component is a versatile, flexible component that can be used to display a variety of content types in
        a well-organized format. It's perfect for showcasing images, text, and actions in a single, cohesive unit.
    </p>

    <h2 id="examples">Practical Examples</h2>

    <x-card header="Card Title">
        <p class="text-gray-700 text-base">
            Main content of the card. This is where you put the main information or description.
        </p>
    </x-card>
    <hr class="my-8" />
    <x-card>
        <x-slot name="header">
            Card Header
        </x-slot>

        <p class="text-gray-700 text-base">
            Main content of the card. This is where you put the main information or description.
        </p>

        <x-slot name="footer">
            <div class="px-6 pt-4 pb-2">
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tag1</span>
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tag2</span>
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tag3</span>
            </div>
        </x-slot>
    </x-card>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-card header="recent activity"&gt;
                // the card content goes here
            &lt;/x-card&gt;
        </code>
    </pre>

    <p>
        As explained earlier, the card component has been kept super simple because people have varying uses for cards
        and forcing specific layouts on them defeats the purpose of having a card component. Below are a few examples of
        how you can use the Bcomponents Card component for varying content types.
    </p>
    <h3>Invoice Table</h3>
    <p>
        Below is an example of an invoice table sitting in a basic Bcomponents Card. The Bcomponents <a
            href="/component/table">Table component</a> was used in building the invoice.
    </p>

    <x-card header="invoice details">
        <x-table>
            <x-slot name="header">
                <th>Item</th>
                <th width="10%" class="text-center">Quantity</th>
                <th width="20%" class="text-right">Price (USD)</th>
            </x-slot>
            <x-table.tbody>
                <tr>
                    <td>Airpods Max (Black)</td>
                    <td class="text-center">1</td>
                    <td class="text-right">500.00</td>
                </tr>
                <tr>
                    <td>Macbook Pro M1 Pro 16 inch</td>
                    <td class="text-center">1</td>
                    <td class="text-right">3,500.00</td>
                </tr>
                <tr>
                    <td>iPhone Lightning Charger</td>
                    <td class="text-center">2</td>
                    <td class="text-right">100.00</td>
                </tr>
                <tr>
                    <td>iTunes Gift Card</td>
                    <td class="text-center">5</td>
                    <td class="text-right double-underline">250.00</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-right font-bold">Total:</td>
                    <td colspan="2" class="text-right font-bold double-underline">4,350.00</td>
                </tr>
            </x-table.tbody>
        </x-table>
    </x-card>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-card header="invoice details"&gt;

                &lt;x-table &gt;
                    &lt;x-slot name="thead"&gt;
                        &lt;th&gt;Item&lt;/th&gt;
                        &lt;th width="10%" class="text-center"&gt;Quantity&lt;/th&gt;
                        &lt;th width="20%" class="text-right"&gt;Price (USD)&lt;/th&gt;
                    &lt;/x-slot&gt;
                    &lt;tr&gt;
                        &lt;td&gt;Airpods Max (Black)&lt;/td&gt;
                        &lt;td class="text-center"&gt;1&lt;/td&gt;
                        &lt;td class="text-right"&gt;500.00&lt;/td&gt;
                    &lt;/tr&gt;
                    ...
                &lt;/x-table&gt;

            &lt;/x-card&gt;
        </code>
    </pre>

    <h3>Huge Navigation Items</h3>
    <p>
        Below is an example of a grid-based navigation that uses cards for its menu items. The hover effect is achieved
        by adding additional TailwindUI classes to the <code class="inline text-red-500">class</code> attribute of the
        card.
    </p>

    <x-grid>
        <x-card class="cursor-pointer hover:shadow-gray-300 hover:dark:shadow-slate-900">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto rounded-full p-3 bg-green-400 text-white"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <span class="text-center block font-semibold mt-2">Projects</span>
        </x-card>
        <x-card class="cursor-pointer hover:shadow-gray-300 hover:dark:shadow-slate-900">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto rounded-full p-3 bg-purple-400 text-white"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>
            <span class="text-center block font-semibold mt-2">Tasks</span>
        </x-card>
        <x-card class="cursor-pointer hover:shadow-gray-300 hover:dark:shadow-slate-900">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto rounded-full p-3 bg-rose-400 text-white"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
            <span class="text-center block font-semibold mt-2">Ideas</span>
        </x-card>
    </x-grid>

    <pre class="language-markup line-numbers" data-line="3,8,13">
        <code>
            &lt;x-grid&gt;

                &lt;x-card class="cursor-pointer hover:shadow-gray-300"&gt;
                    &lt;svg ...&gt;...&lt;/svg&gt;
                    &lt;span class="text-center ..."&gt;Projects&lt;/span&gt;
                &lt;/x-card&gt;

                &lt;x-card class="cursor-pointer hover:shadow-gray-300"&gt;
                    &lt;svg...&gt;...&lt;/svg&gt;
                    &lt;span class="text-center ..."&gt;Tasks&lt;/span&gt;
                &lt;/x-card&gt;

                &lt;x-card class="cursor-pointer hover:shadow-gray-300"&gt;
                    &lt;svg...&gt;...&lt;/svg&gt;
                    &lt;span class="text-center ..."&gt;Ideas&lt;/span&gt;
                &lt;/x-card&gt;

            &lt;/x-grid&gt;
        </code>
    </pre>

    <h2 id="header-footer">Header and Footer</h2>
    <p>
        The Card component supports optional header and footer slots. These slots can contain any content you like, and
        they're independent of each other - you can have a header without a footer, a footer without a header, or both.
    </p>
    <p>
        When the <code class="inline">header</code> slot is set, the main body of the card loses all its padding, so
        you'll need to style the card body as you wish. Here's an example of a card with a header and footer:
    </p>
    <div class="sm:grid sm:grid-cols-2 sm:gap-4 md:divide-y-0 divide-y-8">
        <x-card>
            <x-slot name="header">
                <div class="pb-4">
                    <span class="block font-semibold text-black/70 dark:text-slate-300">mkocansey</span>
                    <span class="block text-xs">Greater Accra, Accra, Ghana</span>
                </div>
            </x-slot>
            <img alt="Photo by Akindele Ibukun from https://unsplash.com/@@thevisualchef007"
                src="https://images.unsplash.com/photo-1651277167651-9d31e995dd4a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE4fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" />
            <x-slot name="footer">
                <div class="flex justify-between p-4">
                    <div class="flex space-x-4">
                        <x-icon name="heart"
                            class="h-[32px] w-[32px] text-gray-500 cursor-pointer hover:text-black hover:dark:text-slate-300" />
                        <x-icon name="chat-bubble-oval-left-ellipsis"
                            class="h-[32px] w-[32px] text-gray-500 cursor-pointer hover:text-black hover:dark:text-slate-300" />
                        <x-icon name="arrow-uturn-left"
                            class="h-[32px] w-[32px] text-gray-500 cursor-pointer hover:text-black hover:dark:text-slate-300" />
                    </div>
                    <div>
                        <x-icon name="bookmark"
                            class="h-[32px] w-[32px] text-gray-500 cursor-pointer hover:text-black hover:dark:text-slate-300" />
                    </div>
                </div>
            </x-slot>
        </x-card>
    </div>

    <pre class="language-markup line-numbers" data-line="3, 17">
        <code>
            &lt;x-card&gt;

                &lt;x-slot name="header"&gt;
                    &lt;div class="flex "&gt;
                        &lt;div class="pl-2"&gt;
                            &lt;span class="block..."&gt;mkocansey&lt;/span&gt;
                            &lt;span class="block..."&gt;Greater Accra, Accra&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/x-slot&gt;

                &lt;img src="/path/to/the/image/file" /&gt;

                &lt;x-slot name="footer"&gt;
                    &lt;div class="flex justify-between p-4"&gt;
                        &lt;div class="flex space-x-4"&gt;
                            &lt;x-icon name="heart" class="h-8 w-8...k" /&gt;
                            &lt;x-icon name="chat-bubble-oval-left-ellipsis" class="h-8 w-8...k" /&gt;
                            &lt;x-icon name="arrow-uturn-left" class="h-8 w-8...k" /&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;svg&gt; ... &lt;/svg&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/x-slot&gt;

            &lt;/x-card&gt;
        </code>
    </pre>


    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Card component.</p>

    <x-table>
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>title</td>
            <td><em>blank</em></td>
            <td>Any title provided will become the card heading</td>
        </tr>
        <tr>
            <td>header</td>
            <td><em>blank</em></td>
            <td>Once a header slot is defined, the card splits into two uneven horizontal parts. The content of the
                header slot will be displayed first.</td>
        </tr>
        <tr>
            <td>footer</td>
            <td><em>blank</em></td>
            <td>Once a footer slot is defined, the content of the slot gets fixed to the base of the card as a footer.
            </td>
        </tr>

        <tr>
            <td>class</td>
            <td>bw-card</td>
            <td>Any additonal css classes can be added using this attribute. For example if you prefer to have
                non-rounded cards you can set <code class="inline">class="!rounded-none"</code>.</td>
        </tr>
    </x-table>

    <h3 class="pb-2 ">Card with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-card
                header="recent updates"
                class="!rounded-none"&gt;
                &lt;x-slot name="header"&gt;...&lt;/x-slot&gt;
                &lt;x-slot name="footer"&gt;...&lt;/x-slot&gt;
                ...

            &lt;/x-card&gt;
        </code>
    </pre>

    <x-slot:side_nav>
        <div class="flex items-center">
            <div class="dot"></div><a href="#basic">Basic card</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#examples">Practical examples</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#header-footer">Header and footer</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:side_nav>
    <x-slot:scripts>
        <script>
            selectNavigationItem('.component-card');
        </script>
    </x-slot:scripts>



</div>
