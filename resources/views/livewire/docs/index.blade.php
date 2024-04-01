<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Getting Started</x-slot:title>
    <x-slot:page_title>Getting Started</x-slot:page_title>
    <p id="getStarted">Bcomponents is a project built with the latest versino of Laravel 11 and Livewire 3 with VOLT,
        which means there is no controller only views and routes, the components are purely Laravel blade components,
        and alpinejs sprinkled with some
        <a href="https://tailwindcss.com">TailwindCSS</a> sauce.
    </p>

    <pre class="language-markup">
        <code>
            &lt;x-button type="button" color="primary" &gt;Save User&lt;/x-button&gt;
        </code>
    </pre>
    <p class="text-center">
        <x-button type="button" color="primary">Save User</x-button>
    </p>

    <br />
    <x-alert closeIcon="false">If you decide to work with those components just copy and the folder to your project and
        start using them.
    </x-alert>
    <br />

    <h2 id="button-example">Button Example</h2>

    <p>
        <x-button type="button" color="primary" has_spinner="true" show_spinner="true">Saving ...</x-button>
        &nbsp;&nbsp;
        <x-button type="button" color="danger" has_spinner="true" show_spinner="true">Deleting ...</x-button>
    </p>
    <pre class="language-markup line-numbers" data-line="2,3">
        <code>
            &lt;x-button
                type="button" 
                color="primary"
                hasSpinner="true"
                showSpinner="true"&gt;
                Saving...
            &lt;/x-button&gt;
        </code>
    </pre>

    <p>
        This documentation is not perfect yet, but we are working on it, if you have any questions or suggestions
        please feel free to get in touch.
    </p>

    <x-slot:sideNavigation>
        <div class="flex items-center">
            <div class="dot"></div><a href="#button-example">Button Example</a>
        </div>
    </x-slot:sideNavigation>

    <x-slot:sideNavigation>
        <div class="flex items-center">
            <div class="dot"></div><a href="#getStarted">Getting Started</a>
        </div>
    </x-slot:sideNavigation>
</div>
