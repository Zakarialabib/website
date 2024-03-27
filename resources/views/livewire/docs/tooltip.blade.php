<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot name="title">Tooltip Component</x-slot>
    <h1 class="mb-10 text-3xl leading-9 text-white font-bold tracking-wide dark:text-red-100">Tooltip</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                Display a tooltip. This is technically not a component.
            </p>
                <a href="" class="admins" data-tooltip="admins" data-inverted="" data-position="left center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </a>

            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-spinner  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            
            <x-spinner size="medium"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-spinner size="medium"  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            <x-spinner size="big"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-spinner size="big"  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            <x-spinner size="xl"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-spinner size="xl"  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            <x-spinner size="omg"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-spinner size="omg"  /&gt;
                </code>
            </pre>
           <a name="attributes"></a>
           <br />
           
            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Spinner component.</p>
            <x-table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>size</td>
                    <td>small</td>
                    <td><code class="inline">small</code> <code class="inline">medium</code> <code class="inline">big</code> <code class="inline">xl</code> <code class="inline">omg</code></td>
                </tr>
                <tr>
                    <td>css</td>
                    <td>bw-spinner</td>
                    <td>Any additional CSS you wish to add.</td>
                </tr>
            </x-table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Spinner with all attributes defined</h3>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-spinner 
                        size="medium"
                        css="m-0" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-alert closeIcon="false">
                The source file for this component is available in <code class="inline">resources > views > components > bladewind > spinner.blade.php</code>
            </x-alert>
            <p>&nbsp;</p>

        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-tooltip');
        </script>
    </x-slot>
</div>