<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>

<div>
    <x-slot:title>Breadcrumb Component</x-slot:title>
    <x-slot:page_title>Breadcrumb</x-slot:page_title>
    <p id="intro">
        The Breadcrumb component provides a sleek and customizable solution for displaying navigational paths. It's
        ideal
        for showing the user's current location within a website or application, allowing them to easily navigate back
        to
        previous pages or sections.
    </p>
    <p id="intro">
        The Breadcrumb component is built with Tailwind CSS, making it easy to customize the appearance and behavior to
        suit your specific needs. It's also fully responsive and works seamlessly across all devices and screen sizes.
    </p>
    <p>Usage Scenarios:</p>
    <ul>
        <li>Displaying the user's current location within a website or application</li>
        <li>Providing a clear and intuitive way for users to navigate back to previous pages or sections</li>
        <li>Enhancing the overall user experience by making it easier to find and access specific content</li>
    </ul>

    <h3 class="mt-4">Breadcrumb with navigation links</h3>

    <p>
        The Breadcrumb component allows you to define the title and navigation links to display. You can customize the
        appearance and behavior of each link, including the icon, text, and URL. This makes it easy to create a
        navigational path that's tailored to your specific needs.
    </p>

    <x-breadcrumb title="Page Title" :breadcrumbs="[
        ['name' => 'Home', 'url' => '/', 'icon' => 'fas fa-home'],
        ['name' => 'Blog', 'url' => '/blog', 'icon' => 'fas fa-blog'],
        ['name' => 'Post Title', 'url' => '/blog/post-title', 'icon' => 'fas fa-file-alt'],
    ]" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-breadcrumb title="Page Title" :breadcrumbs="[
                ['name' => 'Home', 'url' => '/', 'icon' => 'fas fa-home'],
                ['name' => 'Blog', 'url' => '/blog', 'icon' => 'fas fa-blog'],
                ['name' => 'Post Title', 'url' => '/blog/post-title', 'icon' => 'fas fa-file-alt']
            ]"/&gt;
        </code>
    </pre>

    <h3 class="mt-4">Breadcrumb Position</h3>

    <p>
        The Breadcrumb component allows you to specify the position of the title. By default, the title is displayed at
        the top of the breadcrumb. However, you can also display the title at the bottom by setting the
        <code class="inline">position</code> attribute to <code class="inline">'bottom'</code>.
    </p>

    <x-breadcrumb title="Page Title" :breadcrumbs="[
        ['name' => 'Home', 'url' => '/', 'icon' => 'fas fa-home'],
        ['name' => 'Blog', 'url' => '/blog', 'icon' => 'fas fa-blog'],
        ['name' => 'Post Title', 'url' => '/blog/post-title', 'icon' => 'fas fa-file-alt'],
    ]" position="bottom" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-breadcrumb title="Page Title" :breadcrumbs="[
                ['name' => 'Home', 'url' => '/', 'icon' => 'fas fa-home'],
                ['name' => 'Blog', 'url' => '/blog', 'icon' => 'fas fa-blog'],
                ['name' => 'Post Title', 'url' => '/blog/post-title', 'icon' => 'fas fa-file-alt']
            ]" position="bottom"/&gt;
        </code>
    </pre>

    <h3 class="mt-4">Inline Breadcrumb</h3>

    <p>
        The Breadcrumb component allows you to display the breadcrumb links inline. This can be useful when you want to
        save space or create a more compact layout. You can enable the inline display by setting the
        <code class="inline">inline</code> attribute to <code class="inline">true</code>.

    </p>

    <x-breadcrumb title="Page Title" inline="true" :breadcrumbs="[
        ['name' => 'Home', 'url' => '/', 'icon' => 'fas fa-home'],
        ['name' => 'Blog', 'url' => '/blog', 'icon' => 'fas fa-blog'],
        ['name' => 'Post Title', 'url' => '/blog/post-title', 'icon' => 'fas fa-file-alt'],
    ]" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-breadcrumb 
                title="Page Title" 
                inline="true"
                :breadcrumbs="[
                    ['name' => 'Home', 'url' => '/', 'icon' => 'fas fa-home'],
                    ['name' => 'Blog', 'url' => '/blog', 'icon' => 'fas fa-blog'],
                    ['name' => 'Post Title', 'url' => '/blog/post-title', 'icon' => 'fas fa-file-alt']
                ]" /&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Breadcrumb component.</p>

    <x-table-responsive>
        <x-table.thead>
            <x-table.th>Option</x-table.th>
            <x-table.th>Default</x-table.th>
            <x-table.th>Available Values</x-table.th>
        </x-table.thead>
        <x-table.tbody>
            <x-table.tr>
                <x-table.td>title</x-table.td>
                <x-table.td></x-table.td>
                <x-table.td>Text to display as the breadcrumb title</x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>breadcrumbs</x-table.td>
                <x-table.td>[]</x-table.td>
                <x-table.td>An array of breadcrumb items. Each item is an associative array with 'name', 'url', and
                    'icon' keys.</x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>position</x-table.td>
                <x-table.td>top</x-table.td>
                <x-table.td>Position of the title. Available values: 'top', 'bottom'</x-table.td>
            </x-table.tr>
            <x-table.tr>
                <x-table.td>inline</x-table.td>
                <x-table.td>false</x-table.td>
                <x-table.td>Whether the breadcrumb should be displayed inline or not. Available values: true,
                    false</x-table.td>
            </x-table.tr>
        </x-table.tbody>
    </x-table-responsive>

    <h3>Breadcrumb with All Attributes Defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-breadcrumb 
                title="Page Title" 
                position="bottom"
                inline="true"
                :breadcrumbs="[
                    ['name' => 'Home', 'url' => '/', 'icon' => 'fas fa-home'],
                    ['name' => 'Blog', 'url' => '/blog', 'icon' => 'fas fa-blog'],
                    ['name' => 'Post Title', 'url' => '/blog/post-title', 'icon' => 'fas fa-file-alt']
                ]" /&gt;
        </code>
    </pre>


    <x-slot:side_nav>
        <div class="flex items-center">
            <div class="dot"></div><a href="#intro">Breadcrumbs</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:side_nav>
</div>
