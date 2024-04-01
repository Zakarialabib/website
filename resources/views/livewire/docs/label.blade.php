<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Label Component</x-slot:title>
    <x-slot:page_title>Label</x-slot:page_title>
    <p>
        This component wraps but beautifies the default HTML File input. It allows users to select files from their computer. If the selected file is an image you get to see a preview of the file. Heavy images will take a couple of seconds to render the preview.
    </p>
    <x-label name="logo" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-label name="logo" /&gt;
        </code>
    </pre>

    <p>It is possible to change the placeholder text</p>
    <x-label
        name="proof_of_payment"
        required="true"
        placeholder="Upload proof of payment"  />

    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-label
                name="proof_of_payment"
                required="true"
                placeholder="Upload proof of payment"  /&gt;
        </code>
    </pre>

    <h3>Accept Only Specific File Types</h3>
    <p>
        The component allows you to restrict the type of files users can upload by setting the <code class="inline text-red-500">accepted_file_types</code> attribute.
        You can either specify one or a comma separated list of any of the <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types" target="_blank">MIME types available here</a>.
        You can either specify MIME types or file extensions. You can have a comma separated mixture of file extensions and MIME types. Note however, the file extensions need to have the dot prefix. Example:
        <code class="text-red-500 inline">accepted_file_types="image/*, .pdf, .xlsx"</code>
    </p>
    <x-label placeholder="Upload a PDF" name="pdf_only" accepted_file_types=".pdf"  />

    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-label
                name="pdf_only"
                placeholder="Upload a PDF"
                accepted_file_types=".pdf"  /&gt;
        </code>
    </pre>

    <h3>Restrict File Sizes</h3>
    <p>
        You can restrict how big the files users upload should be by adding the <code class="inline text-red-500">max_file_size</code> attribute.
        The file size is measured in megabytes (mb) and you don't need to add the 'mb'. Just the number. The default max_file_size is 5 (5mb).
        The component will display an error if the user uploads a file larger than what is specified in <code class="inline">max_file_size</code>.
        If you expect your users to upload really huge files, remember to set this attribute so your users don't get restricted by the default of 5mb.
    </p>
    <x-label placeholder="Upload a PDF" name="pdf_only_1mb" accepted_file_types=".pdf" max_file_size="1"  />

    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-label
                name="pdf_only"
                placeholder="Upload a PDF"
                max_file_size="1"
                accepted_file_types=".pdf"  /&gt;
        </code>
    </pre>
    <br />
    <p>
        <x-alert type="warning" closeIcon="false">
            To prevent erratic behaviour when using the label multiple times on the same page, you should give each label a unique name. You can do this by setting the <code class="inline">name</code> attribute on the label.
        </x-alert>
    </p>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the label component.</p>
    
    <x-table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>name</td>
            <td>bw-label</td>
            <td>Name for the label. So if you named the label <code>profile_pic</code>, the resulting html will be
            <code class="inline text-red-500">&lt;input type="file" class="bw-profile_pic" name="profile_pic" ../&gt;</code></td>
        </tr>
        <tr>
            <td>accepted_file_types</td>
            <td>audio/*, video/*, image/*, .pdf</td>
            <td>One or a comma separated list of any of the mimetypes <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types" target="_blank">available here</a>.</td>
        </tr>
        <tr>
            <td>placeholder</td>
            <td>Select a file</td>
            <td>Placeholder text to display</td>
        </tr>
        <tr>
            <td>required</td>
            <td>false</td>
            <td>Determines if the placeholder text should have an asterisk appended to it or not. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
    </x-table>

    <h3>label with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-label
                name="profile_pic"
                required="false"
                placeholder="Choose a profile picture"
                accepted_file_types=".jpg, .png" /&gt;
        </code>
    </pre>

    <x-alert closeIcon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > label.blade.php</code>
    </x-alert>

    <x-slot:sideNavigation>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:sideNavigation>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-label');
        </script>
    </x-slot>

</div>