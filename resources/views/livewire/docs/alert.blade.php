<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Alert Component</x-slot:title>
    <x-slot:page_title>Alert</x-slot:page_title>
    <p id="intro">
        The Alert component is built with Tailwind CSS and Alpine.js, allows you to display informative messages to
        users in a visually appealing and customizable
        manner. With support for various alert types and optional icons, It provides flexibility in styling and
        behavior, making it suitable for a wide range of use cases.
    </p>
    <p>Usage Scenarios:</p>

    <ul>
        <li>
            Form Submission Feedback: Display feedback messages after form submissions, indicating success or error.
        </li>
        <li>
            System Notifications: Inform users about important system events or updates.
        </li>
        <li>
            Validation Messages: Show validation errors or warnings in forms.
        </li>
        <li>
            Confirmation Alerts: Prompt users for confirmation before performing critical actions.
        </li>
    </ul>


    <h3 class="mt-4">Info</h3>
    <x-alert showIcon="true" type="info" class="mb-3">Your subscription is expiring in 19 days. <a href="#">Renew
            now</a></x-alert>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-alert showIcon="true" type="info"&gt;
                Your subscription is expiring in 19 days.
                &lt;a href="#"&gt;Renew now&lt;/a&gt;
            &lt;/x-alert&gt;
        </code>
    </pre>

    <h3>Error</h3>
    <x-alert type="error" showIcon="true" class="mb-3">You do not have permission to upload files</x-alert>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-alert
            showIcon="true"
                type="error"&gt;
                You do not have permission to upload files
            &lt;/x-alert&gt;
        </code>
    </pre>

    <h3>Warning</h3>
    <x-alert type="warning" showIcon="true" class="mb-3">Well, this is your first warning. Do that again and I'll wipe
        your hard
        disk</x-alert>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-alert
                showIcon="true"
                type="warning"&gt;
                Well, this is your first warning. Do that again and I'll wipe your hard disk
            &lt;/x-alert&gt;
        </code>
    </pre>

    <h3>Success</h3>
    <x-alert type="success" showIcon="true" class="mb-3">Files were successfully uploaded</x-alert>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-alert
                showIcon="true"
                type="success"&gt;
                Files were successfully uploaded
            &lt;/x-alert&gt;
        </code>
    </pre>

    <h2 id="iconless">Without Icons</h2>
    <p>By default the alert component shows a close icon and another icon that matches the type of alert being
        displayed.
        Both icons can be turned off separately.</p>
    <h3>Info</h3>
    <x-alert dismissal="false">Your subscription is expiring in 19 days. <a href="#" class="!text-white/70">Renew
            now</a></x-alert>
    <pre class="language-markup line-numbers" data-line="3,4">
        <code>
            &lt;x-alert
                dismissal="false"&gt;
                Your subscription is expiring in 19 days.
                &lt;a href="#" class="!text-white/70"&gt;Renew now&lt;/a&gt;
            &lt;/x-alert&gt;
        </code>
    </pre>
    <h3>Error</h3>
    <x-alert type="error" dismissal="false">You do not have permission to upload files</x-alert>
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-alert
                type="error"
                dismissal="false"&gt;
                You do not have permission to upload files
            &lt;/x-alert&gt;
        </code>
    </pre>

    <h3>Warning</h3>
    <x-alert type="warning">Well, this is your first warning. Do that again and I'll
        wipe
        your hard disk</x-alert>
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-alert
                type="warning"&gt;
                Well, this is your first warning.
                Do that again and I'll wipe your hard disk
            &lt;/x-alert&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Alert component.</p>

    <x-table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>type</td>
            <td>info</td>
            <td><code class="inline">info</code> <code class="inline">error</code> <code class="inline">warning</code>
                <code class="inline">success</code>
            </td>
        </tr>
        <tr>
            <td>dismissal</td>
            <td>true</td>
            <td>Specifies if the close icon should be shown. Value needs to be set as a string not boolean. <br><code
                    class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>showIcon</td>
            <td>false</td>
            <td>Specifies if the alert type icon should be displayed. value either true or false. <br>
                <code class="inline">true</code> <code class="inline">false</code>
            </td>
        </tr>
        <tr>
            <td>class</td>
            <td><em>blank</em></td>
            <td>Any additonal css classes can be added using this attribute. For example to make your alert rounded you
                can
                add <code class="inline">class="rounded-lg"</code> for example. The default is an empty string.</td>
        </tr>
    </x-table>

    <h3>Alert with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-alert
                type="warning"
                dismissal="false"
                
                class="rounded-lg shadow-sm"&gt;
                Stay safe. Wash your hands for 20 seconds
            &lt;/x-alert&gt;
        </code>
    </pre>

    <x-slot:side_nav>
        <div class="flex items-center">
            <div class="dot"></div><a href="#intro">Alerts</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#iconless">Without icons</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:side_nav>
</div>
