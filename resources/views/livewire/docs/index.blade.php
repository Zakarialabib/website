<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Getting Started</x-slot:title>
    <x-slot:page_title>Getting Started</x-slot:page_title>
    <p>
        Bcomponents is a collection of super simple but elegant Laravel blade-based UI components using TailwindCSS
        and
        alpinejs.
    </p>
    <h2 id="required">Requirements </h2>
    <p>Bcomponents components are purely Laravel blade components sprinkled with some <a
            href="https://tailwindcss.com">TailwindCSS</a> sauce. This means you absolutely need to be using
        Bcomponents in
        a Laravel project. The package has the following dependencies:</p>
    <p>- PHP >= 8.1 <br />- Laravel >= 10.x</p>

    <pre class="language-markup">
        <code>
            &lt;x-button type="button" color="primary" &gt;Save User&lt;/x-button&gt;
        </code>
    </pre>
    <p class="text-center">
        <x-button type="button" color="primary">Save User</x-button>
    </p>


    <br />
    <x-alert closeIcon="false">If you decide to go with the dot syntax, it is important to always publish the
        bladeComponents components after any update.</x-alert>
    <br />

    <x-alert closeIcon="false" type="warning">
        IMPORTANT: Any changes you may have made to the bladeComponents component view files will be lost anytime you
        publish the components or enable automatic publishing of the components.
    </x-alert>

    <p>
        If you are using Bcomponents in a Laravel 10 project you will need to define the component attributes using
        <strong class="text-red-500">camelCase</strong> instead of the default <strong
            class="text-red-500">snake_case</strong> style used throughout the documentation.
        For some reason component props defined using snake_case style do not work consistently across different Laravel
        8 versions.
    </p>

    <h2 id="button-example">Button Example</h2>

    <p>
        description explanations
    </p>

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
        This principle is applicable for ALL component attributes that are more than one word. Single word attributes
        like
        <em>name, type, size, color</em> are not affected. Any multi word attribute will need to be camelCased. A few
        examples are:
        <em>hasSpinner, showSpinner, canSubmit, showIcon, hasShadow, acceptedFileTypes, showCloseIcon</em> etc.
    </p>

    <x-slot:side_nav>
        <div class="flex items-center">
            <div class="dot"></div><a href="#button-example">Button Example</a>
        </div>
    </x-slot:side_nav>

    <x-slot:side_nav>
        <div class="flex items-center">
            <div class="dot"></div><a href="#required">Requirements</a>
        </div>

        <div class="flex items-center">
            <div class="dot"></div><a href="#required">Guide</a>
        </div>

    </x-slot:side_nav>
</div>
