<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>

    <x-slot name="title">Icon Component</x-slot>
    <x-slot name="page_title">Icon</x-slot>

    <p>
        Display icons from <a href="https://heroicons.com">Heroicons</a> or SVG files. Both solid and outline modes are supported when using icons from Heroicons.
        The default are outline icons. To display an icon from Heroicons, you will need to enter its name exactly as it is defined on the website.
    </p>

    <div class="text-center">
        <x-icon name="swatch" />
    </div>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-icon name="swatch" /&gt;
        </code>
    </pre>
    <p>
        By default this component sets all icons at <code class="inline">h-6</code> and <code class="inline">w-6</code>.
        You can override the icon size and colours using the standard TailwindCSS classes. You can in fact, add any TailwindCSS class to the icon.
    </p>
    <div class="text-center">
        <x-icon name="video-camera-slash" class="h-16 w-16 text-amber-500" />
    </div>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-icon
                name="video-camera-slash" class="h-16 w-16 text-amber-500" /&gt;
        </code>
    </pre>
    <div class="text-center pt-10">
        <x-icon name="microphone" class="h-14 w-14 text-white bg-pink-400 p-4 rounded-full cursor-pointer hover:bg-pink-500 hover:p-3" />
    </div>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-icon
                name="microphone"
                class="h-14 w-14 text-white bg-pink-400 p-4 rounded-full
                        cursor-pointer hover:bg-pink-500 hover:p-3" /&gt;
        </code>
    </pre>
    <div class="text-center pt-10">
        <x-icon name="speaker-wave" class="h-14 w-14 text-cyan-500 p-3 animate-bounce rounded-md cursor-pointer bg-white border-2 border-cyan-500 hover:bg-cyan-500 hover:text-white" />
    </div>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-icon
                name="speaker-wave"
                class="h-14 w-14 text-cyan-500 p-3 animate-bounce rounded-md
                        cursor-pointer bg-white border-2 border-cyan-500
                        hover:bg-cyan-500 hover:text-white" /&gt;
        </code>
    </pre>

    <h2 id="solid-icons">Solid Icons</h3>
    <p>
        Icons from Heroicons come in two versions, outline and solid. The Bcomponents Icon component by default uses <code class="inline">outline</code>
        versions of the icons. To display solid versions of your icons, you will need to specify the attribute <code class="inline text-red-500">type="solid"</code>.
    </p>
    <div class="text-center">
        <x-icon name="swatch" type="solid" />
    </div>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-icon name="swatch" type="solid" /&gt;
        </code>
    </pre>
    <div class="text-center">
        <x-icon name="video-camera-slash" class="h-16 w-16 text-amber-500" type="solid" />
    </div>
    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-icon
                name="video-camera-slash"
                type="solid"
                class="h-16 w-16 text-amber-500" /&gt;
        </code>
    </pre>

    <h3 id="svg-icons">SVG Icons</h3>
    <p>
        So far all our icons have been from Heroicons. What if you have your own SVG icon tags from other websites you want to use? It is possible. Just paste the SVG tag in the <code class="inline">name</code> attribute of the icon and Bladewind will display it.
        The four icons below are taken from <a href="https://iconsax.io/">icon<b>sax</b></a>.
    </p>
    <div class="text-center">
        <x-icon name='<svg class="h-24 w-24 inline-block" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.72 9.56H5.78C3.7 9.56 2 7.86003 2 5.78003C2 3.70003 3.7 2 5.78 2H7.67001C9.23001 2 10.5 3.28002 10.5 4.83002V7.39001V17.1C10.5 18.14 9.64999 18.99 8.60999 18.99C7.56999 18.99 6.72 18.14 6.72 17.1V9.56Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.77985 6.72003C5.25985 6.72003 4.83984 6.30009 4.83984 5.78009C4.83984 5.26009 5.25985 4.84009 5.77985 4.84009" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17.28 13.52V9.56H18.22C20.3 9.56 22 7.86003 22 5.78003C22 3.70003 20.3 2 18.22 2H16.33C14.77 2 13.5 3.28002 13.5 4.83002V7.39001V17.1C13.5 18.14 14.35 18.99 15.39 18.99C16.43 18.99 17.28 18.14 17.28 17.1" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.2207 6.72003C18.7407 6.72003 19.1607 6.30009 19.1607 5.78009C19.1607 5.26009 18.7407 4.84009 18.2207 4.84009" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.5 22V19" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.5 22V19" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>' />
    </div>
    <pre class="language-markup line-numbers">
        <code class="!whitespace-pre-wrap">
            &lt;x-icon name='&lt;svg class="h-24 w-24 inline-block" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M6.72 9.56H5.78C3.7 9.56 2 7.86003 2 5.78003C2 3.70003 3.7 2 5.78 2H7.67001C9.23001 2 10.5 3.28002 10.5 4.83002V7.39001V17.1C10.5 18.14 9.64999 18.99 8.60999 18.99C7.56999 18.99 6.72 18.14 6.72 17.1V9.56Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M5.77985 6.72003C5.25985 6.72003 4.83984 6.30009 4.83984 5.78009C4.83984 5.26009 5.25985 4.84009 5.77985 4.84009" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M17.28 13.52V9.56H18.22C20.3 9.56 22 7.86003 22 5.78003C22 3.70003 20.3 2 18.22 2H16.33C14.77 2 13.5 3.28002 13.5 4.83002V7.39001V17.1C13.5 18.14 14.35 18.99 15.39 18.99C16.43 18.99 17.28 18.14 17.28 17.1" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M18.2207 6.72003C18.7407 6.72003 19.1607 6.30009 19.1607 5.78009C19.1607 5.26009 18.7407 4.84009 18.2207 4.84009" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M8.5 22V19" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;path d="M15.5 22V19" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;' /&gt;
        </code>
    </pre>

    <div class="text-center">
        <x-icon name='<svg class="h-24 w-24 inline-block" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.2702 9.10001L14.3002 8.25001C14.1402 8.18001 14.0002 7.97001 14.0002 7.79001V4.79001C14.0002 3.85001 13.3102 2.74001 12.4702 2.31001C12.1702 2.16001 11.8202 2.16001 11.5202 2.31001C10.6802 2.74001 9.99023 3.86001 9.99023 4.80001V7.80001C9.99023 7.98001 9.85023 8.19001 9.69023 8.26001L4.11023 10.67C3.49023 10.92 2.99023 11.69 2.99023 12.36V13.65C2.99023 14.49 3.62023 14.9 4.39023 14.57L9.30023 12.45C9.68023 12.28 10.0002 12.49 10.0002 12.91V15.76C10.0002 15.99 9.87023 16.31 9.71023 16.47L7.44023 18.75C7.20023 18.99 7.09023 19.45 7.20023 19.78L7.64023 21.11C7.82023 21.69 8.48024 21.97 9.02024 21.69L11.3502 19.73C11.7002 19.43 12.2802 19.43 12.6302 19.73L14.9602 21.69C15.5002 21.96 16.1602 21.69 16.3602 21.11L16.8002 19.78C16.9102 19.46 16.8002 18.99 16.5602 18.75L14.2902 16.47C14.1202 16.31 13.9902 15.99 13.9902 15.76V12.91C13.9902 12.49 14.3002 12.29 14.6902 12.45L19.6002 14.57C20.3702 14.9 21.0002 14.49 21.0002 13.65V12.36C21.0002 11.69 20.5002 10.92 19.8802 10.66" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>' />
    </div>
    <pre class="language-markup line-numbers">
        <code class="!whitespace-pre-wrap">
            &lt;x-icon name='&lt;svg class="h-24 w-24 inline-block" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M16.2702 9.10001L14.3002 8.25001C14.1402 8.18001 14.0002 7.97001 14.0002 7.79001V4.79001C14.0002 3.85001 13.3102 2.74001 12.4702 2.31001C12.1702 2.16001 11.8202 2.16001 11.5202 2.31001C10.6802 2.74001 9.99023 3.86001 9.99023 4.80001V7.80001C9.99023 7.98001 9.85023 8.19001 9.69023 8.26001L4.11023 10.67C3.49023 10.92 2.99023 11.69 2.99023 12.36V13.65C2.99023 14.49 3.62023 14.9 4.39023 14.57L9.30023 12.45C9.68023 12.28 10.0002 12.49 10.0002 12.91V15.76C10.0002 15.99 9.87023 16.31 9.71023 16.47L7.44023 18.75C7.20023 18.99 7.09023 19.45 7.20023 19.78L7.64023 21.11C7.82023 21.69 8.48024 21.97 9.02024 21.69L11.3502 19.73C11.7002 19.43 12.2802 19.43 12.6302 19.73L14.9602 21.69C15.5002 21.96 16.1602 21.69 16.3602 21.11L16.8002 19.78C16.9102 19.46 16.8002 18.99 16.5602 18.75L14.2902 16.47C14.1202 16.31 13.9902 15.99 13.9902 15.76V12.91C13.9902 12.49 14.3002 12.29 14.6902 12.45L19.6002 14.57C20.3702 14.9 21.0002 14.49 21.0002 13.65V12.36C21.0002 11.69 20.5002 10.92 19.8802 10.66" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/&gt;
&lt;/svg&gt;' /&gt;
        </code>
    </pre>
    <p>
        <x-alert closeIcon="false">Note how the name attribute now uses single quotes and not double quotes</x-alert>
    </p>
    <h3>SVG Image Files</h3>
    <p>
        Bcomponents serves all the Hericons icons from <code class="inline">public > vendor > bladewind > icons > [solid, outline]</code>.
        As stated earlier, the default icons served are outlines, so the <em>outline</em> directory is used. When you specify <code class="inline text-red-500">type="solid"</code>, the <em>solid</em> directory is used.
        You can place your own SVG files in either the outline or solid directories and then enter the file name (without .svg) in the name attribute of the component.
    </p>
    <p>
        <x-alert closeIcon="false">
            For the example below, we placed the SVG file <b>discount-shape.svg</b> in the <code class="inline">public > vendor > bladewind > icons > outline</code> directory.
        </x-alert>
    </p>
    <div class="text-center">
        <x-icon name="discount-shape" class="h-24 w-24 !fill-yellow-500 !stroke-yellow-300" />
    </div>
    <pre class="language-markup">
        <code>
            &lt;x-icon name="discount-shape"
                class="h-24 w-24 !fill-yellow-500 !stroke-yellow-300" /&gt;
        </code>
    </pre>
    <br />
    <p>
        <x-alert closeIcon="false">
            For the example below, we placed the SVG file <b>message-notif.svg</b> in the <code class="inline">public > vendor > bladewind > icons > solid</code> directory.
            In this case we will need to add the type="solid" attribute.
        </x-alert>
    </p>
    <div class="text-center">
        <x-icon name="message-notif" type="solid" class="h-24 w-24 !fill-green-300 !stroke-green-500" />
    </div>
    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-icon
                name="message-notif"
                type="solid"
                class="h-24 w-24 !fill-green-300 !stroke-green-500" /&gt;
        </code>
    </pre>

    <h2 id="custom-dir">Custom SVG Directory</h2>
    <p>
        If you place your icon files in the default Bcomponents directory specified above, it is likely your files will be overwritten anytime there is a Bladewind update and you publish the public files.
        To ensure you don't lose your custom icons, it is advised you place them in a directory in your <code class="inline">public</code> directory. You will need to specify the <code class="inline text-red-500">dir</code> attribute.
    </p>
    <p>
        <x-alert closeIcon="false">
            For the example below, we placed the SVG file <b>discount-circle.svg</b> in the <code class="inline">public > assets > images</code> directory.
        </x-alert>
    </p>
    <div class="text-center">
        <x-icon name="discount-circle" dir="assets/images" class="h-24 w-24" />
    </div>
    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-icon
                name="discount-circle"
                dir="assets/images"
                class="h-24 w-24" /&gt;
        </code>
    </pre>
    <p>
        <x-alert type="error" closeIcon="false">
            Some TailwindCSS classes may not work on SVG files/icons that are not from Heroicons. SVG <a href="https://tailwindcss.com/docs/fill">fill</a> and <a href="https://tailwindcss.com/docs/stroke">stroke</a> classes were not working as expected in some cases.
        </x-alert>
    </p>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Bell component.</p>
    
    <x-table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>name</td>
            <td><em>blank</em></td>
            <td>The name of the icon (as defined on <a href="https://heroicons.com">Heroicons</a>) to display.</td>
        </tr>
        <tr>
            <td>type</td>
            <td>outline</td>
            <td>Determines what type of the icon to display. <br> <code class="inline">outline</code> <code class="inline">solid</code></td>
        </tr>
        <tr>
            <td>class</td>
            <td>h-6 w-6 inline-block</td>
            <td>CSS classes for defining of the icon. Accepts any <a href="https://tailwindcss.com">TailwindCSS</a> classes applicable to SVGs.</td>
        </tr>
    </x-table>

    <h3>Icon with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-icon
                name="video-camera-slash"
                type="solid"
                dir="assets/images"
                class="h-16 w-16 text-amber-500" /&gt;
        </code>
    </pre>

    <p>
        <x-alert closeIcon="false">
            The source file for this component is available in <code class="inline">resources > views > components > bladewind > icon.blade.php</code>
        </x-alert>
    </p>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#solid-icons">Solid icons</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#svg-icons">SVG icons</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#custom-dir">Custom directory</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>
    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-icon');
        </script>
    </x-slot>

