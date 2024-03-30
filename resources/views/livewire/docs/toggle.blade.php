<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Toggle Component</x-slot:title>
    <x-slot:page_title>Toggle</x-slot:page_title>

    <p>
        Display a toggle input. Under the hood, the toggle component is a checkbox spiced up nicely.
    </p>
    <p><x-toggle /></p>
    <pre class="language-markup">
        <code>
            &lt;x-toggle  /&gt;
        </code>
    </pre>
    <p>
        You can display the toggle component with a label that can be positioned either on the left or right of the component.
        The default position is left but can easily be flipped to the right by setting the attribute <code class="inline text-red-500">label_position="right"</code>.
        Clicking on the label toggles the component.
    </p>
    <p><x-toggle label="Send me quarterly newsletters" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-toggle label="Send me quarterly newsletters"  /&gt;
        </code>
    </pre>
    <p><x-toggle label="Send me quarterly newsletters" label_position="right" /></p>
    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-toggle
                label="Send me quarterly newsletters"
                label_position="right"  /&gt;
        </code>
    </pre>

    <h2 id="checked">Checked and Disabled</h2>
    <p>
        The toggle component can be checked and/or disabled by default. To check the component set <code class="inline text-red-500">checked="true"</code>. To mark the toggle as disabled, set <code class="inline text-red-500">disabled="true"</code>.
    </p>
    <p><x-toggle label="I am checked at birth" checked="true" /></p>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-toggle
                checked="true"
                label="I am checked at birth" /&gt;
        </code>
    </pre>
    <p><x-toggle label="You can't push me around" disabled="true" /></p>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-toggle
                disabled="true"
                label="I am checked at birth" /&gt;
        </code>
    </pre>
    <p><x-toggle label="I am checked but you still can't push me around" disabled="true" checked="true" /></p>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-toggle
                checked="true" disabled="true"
                label="I am checked at birth" /&gt;
        </code>
    </pre>

    <h2 id="colours">Different Colours</h2>
    <p>
        There are nine colours to pick from when the toggle component is active or checked. To set your preferred colour set the <code class="inline text-red-500">color</code> attribute.
    </p>
    <p>
        <x-toggle color="red" checked="true" /> &nbsp;&nbsp; <x-toggle color="yellow" checked="true" /> &nbsp;&nbsp;
        <x-toggle color="green" checked="true" /> &nbsp;&nbsp; <x-toggle color="pink" checked="true" /> &nbsp;&nbsp;
        <x-toggle color="cyan" checked="true" /> &nbsp;&nbsp; <x-toggle color="gray" checked="true" /> &nbsp;&nbsp;
        <x-toggle color="purple" checked="true" /> &nbsp;&nbsp; <x-toggle color="orange" checked="true" /> &nbsp;&nbsp;
        <x-toggle checked="true" /> &nbsp;&nbsp;
    </p>
    <p><pre class="language-markup"><code>&lt;x-toggle color="red" /&gt;</code></pre></p>
    <p><pre class="language-markup"><code>&lt;x-toggle color="yellow" /&gt;</code></pre></p>
    <p><pre class="language-markup"><code>&lt;x-toggle color="green" /&gt;</code></pre></p>
    <p><pre class="language-markup"><code>&lt;x-toggle color="pink" /&gt;</code></pre></p>
    <p><pre class="language-markup"><code>&lt;x-toggle color="cyan" /&gt;</code></pre></p>
    <p><pre class="language-markup"><code>&lt;x-toggle color="gray" /&gt;</code></pre></p>
    <p><pre class="language-markup"><code>&lt;x-toggle color="purple" /&gt;</code></pre></p>
    <p><pre class="language-markup"><code>&lt;x-toggle color="orange" /&gt;</code></pre></p>
    <p><pre class="language-markup"><code>&lt;x-toggle color="blue" /&gt;</code></pre></p>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Toggle component.</p>
    
    <x-table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>id</td>
            <td></td>
            <td>Unique id to identify the component.</td>
        </tr>
        <tr>
            <td>name</td>
            <td></td>
            <td>Unique name to identify the component and access its value when submitted.</td>
        </tr>
        <tr>
            <td>label</td>
            <td><em>blank</em></td>
            <td>Clickable label to display next to the toggle component</td>
        </tr>
        <tr>
            <td>label_position</td>
            <td>left</td>
            <td>Specifies where the label should be positioned. <br /><code class="inline">left</code> <code class="inline">right</code></td>
        </tr>
        <tr>
            <td>disabled</td>
            <td>false</td>
            <td>Specifies if the toggle is disabled or not. <br /><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>checked</td>
            <td>false</td>
            <td>Specifies if the toggle is checked or not. <br /><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>color</td>
            <td>primary</td>
            <td>There are nine colors to choose from. <br />
                <code class="inline">red</code> <code class="inline">yellow</code> <code class="inline">green</code> <code class="inline">blue</code> <code class="inline">pink</code>
                <code class="inline">cyan</code> <code class="inline">purple</code> <code class="inline">gray</code> <code class="inline">orange</code></td>
        </tr>
        <tr>
            <td>direction</td>
            <td>row</td>
            <td>Specifies the direction of the flex container. <br /><code class="inline">row</code> <code class="inline">column</code></td>
        </tr>
    </x-table>

    <h3>Toggle with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-toggle
                id="toggle1"
                name="subscribe"
                label="Send me quarterly newsletters"
                label_position="right"
                disabled="false"
                checked="false"
                color="purple"
                direction="row"
                wire:model="toggleValue" /&gt;
        </code>
    </pre>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#checked">Checked and disbled</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#colours">Different colours</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

</div>