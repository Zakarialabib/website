<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Input Component</x-slot:title>
    <x-slot:page_title>Input</x-slot:page_title>

    <p>
        Displays a text input element. This is also commonly known as a text box. This component in fact works for all
        the
        possible values of <code class="inline text-red-500">&lt;input type="" .../&gt;</code>.
        The default is <code class="inline text-red-500">input type="text"</code>. This Bladewind component simply
        wraps
        the HTML input so you are free to use all the various
        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attributes" target="_blank">input
            attributes</a> available in HTML.
    </p>
    <p><x-input name="fnaln" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-input  /&gt;
        </code>
    </pre>
    <h2 id="password">Password Input</h2>
    <p>This behaves just like the regular HTML password input. Nothing fancy. Any values entered into this field are
        masked.
    </p>
    <p><x-input type="password" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-input type="password"  /&gt;
        </code>
    </pre>
    <h3>Show Password With The Eye</h3>
    <p>
        The component allows you to specify if the user should be able to view the password they entered by clicking on
        an
        eye. This can be achieved by setting
        <code class="inline text-red-500">viewable="true"</code>.
        The eye is appended as a <a href="#prefix-siffix">suffix</a> to the input. Clicking on the eye when the password
        is
        revealed, hides the pasword.
        The eye icon will be displayed ONLY if the input <code class="inline text-red-500">type="password"</code>. It
        will
        be ignored in all other cases.
    </p>
    <p><x-input type="password" name="passwed" viewable="true" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-input type="password" suffix="eye"  /&gt;
        </code>
    </pre>
    <h2 id="numeric">Numeric Input</h2>
    <p>This accepts only numeric values. Useful when entering phone numbers, age or amounts.
        By default the decimal point is not allowed as it is technically not a number. In cases where you need decimals,
        use
        the attribute <code class="inline text-red-500">with_dots="true"</code></p>
    <p><x-input numeric="true" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-input numeric="true"  /&gt;
        </code>
    </pre>
    <h2 id="labels-placeholders">Inputs With Labels</h2>
    <p>
        You can display the Bcomponents textbox with labels. Labels present themselves as placeholders but jump to
        the
        top border of the textbox when that field has focus.
        This is a nice way to build compact looking forms without having form labels in the way. If you prefer to create
        and
        style your own form labels, simply ignore the <code class="inline text-red-500">label</code> attribute and use
        the
        <code class="inline text-red-500">placeholder</code> attribute instead.
    </p>
    <p><x-input label="Full name" /></p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input label="Full name"  /&gt;
        </code>
    </pre>
    <h3>Placeholder Text</h3>
    <p><x-input placeholder="Full name" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-input placeholder="Full name"  /&gt;
        </code>
    </pre>
    <h3>What Happens When Both Placeholder and Label are Set</h3>
    <p>
        The <code class="inline">label</code> attribute actually replaces <code class="inline">placeholder</code>. In
        most
        common cases input labels are displayed above
        the input box and don't interfere with the input's placeholder text. However, the label for Bladewind's Textbox
        component is designed to sit in the same spot where the placeholder text is displayed and covers it up.
        Having a placeholder text that is longer than your label text results in some parts of the placeholder text
        sticking
        out under the label. If you want the placeholder to still be shown even when there is a label, set <code
            class="inline text-red-500">show_placeholder_always="true"</code>
    </p>
    <p><x-input name="mobile" label="Mobile" placeholder="000.0000.000" show_placeholder_always="true" /></p>
    <pre class="language-markup line-numbers">
            <code>
                &lt;x-input
                    name="mobile" label="Mobile" placeholder="000.0000.000" /&gt;
            </code>
        </pre>
    <p>
        From the example above you will notice the placeholder is sticking out under the label. This is because the
        placeholder text is longer than the label.
        This is why Bladewind hides the placeholder when the label is set. One way to fix this is by appending non
        breaking
        spaces to your label till the placeholder text is covered.
        This is an ugly solution.
    </p>
    <p><x-input name="mobile2"
            label="Mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
            placeholder="000.0000.000" show_placeholder_always="true" /></p>
    <pre class="language-markup line-numbers">
            <code>
                &lt;x-input name="mobile"
                    label="Mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                    placeholder="000.0000.000"
                    show_placeholder_always="true" /&gt;
            </code>
        </pre>
    <h2 id="required">Required Fields</h2>
    <p>
        This either adds a red asterisk sign to the placeholder text or a red star to the label of the input field.
    </p>
    <p><x-input label="Full name" required="true" /></p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input required="true" label="Full name"  /&gt;
        </code>
    </pre>
    <h2 id="events-validations">Events</h2>
    <p>
        You can append any of the available HTML event attributes (<em>onclick, onblur, onfocus, onmouseover,
            onmouseout,
            onkeyup, onkeydown</em> etc) to the component, just like you would to a regular <code
            class="inline">&lt;input
            ...</code> tag.
        The border of the textbox below turns red onfocus and to gray onblur.
    </p>
    <p><x-input name="events" label="Full name" required="true"
            onfocus="changeCss('.events', '!border-2,!border-red-400')"
            onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')" /></p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input
                name="events"
                label="Full name"
                required="true"
                onfocus="changeCss('.events', '!border-2,!border-red-400')"
                onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"  /&gt;
        </code>
    </pre>
    <h3>Validating Required Fields</h3>
    
    <x-card>
        <form method="get" class="signup-form">
            <h1 class="my-2 text-2xl font-light text-blue-900/80">Create Account</h1>
            <p class="mt-3 mb-6 text-blue-900/80 text-sm">
                This is a sign up form example to demonstrate how to validate forms using Bladewind.
            </p>
            <x-input name="fname" required="true" label="Full Name"
                error_message="You will need to enter your full name" />
            <div class="sm:flex gap-4">
                <x-input name="email" required="true" label="Email" />
                <x-input name="mobile3" label="Mobile" numeric="true" />
            </div>
            <x-textarea required="true" name="bio" error_message="Yoh! write something nice about yourself"
                label="Describe yourself" show_error_inline="true"></x-textarea>
            <div class="text-center">
                <x-button name="btn-save" has_spinner="true" type="primary" can_submit="true" class="mt-3">Sign Up
                    Today</x-button>
            </div>
        </form>
    </x-card>
    <br />
    <p>
        Let's take a look at the code for the form and then proceed to break it down.
    </p>
    <pre class="language-markup line-numbers" data-line="1,5,16,22,33,35, 36">
        <code>
            &lt;x-notification /&gt;

            &lt;x-card&gt;

                &lt;form method="get" class="signup-form"&gt;

                    &lt;h1 class="my-2 text-2xl font-light text-blue-900/80"&gt;Create Account&lt;/h1&gt;
                    &lt;p class="mt-3 mb-6 text-blue-900/80 text-sm"&gt;
                        This is a sign up form example to demonstrate how to validate forms using Bladewind.
                    &lt;/p&gt;

                    &lt;x-input
                        name="fname"
                        required="true"
                        label="Full Name"
                        error_message="You will need to enter your full name" /&gt;

                    &lt;div class="flex gap-4"&gt;

                        &lt;x-input
                            name="email"
                            required="true"
                            label="Email" /&gt;

                        &lt;x-input
                            name="mobile"
                            label="Mobile"
                            numeric="true" /&gt;

                    &lt;/div&gt;

                    &lt;x-textarea
                        required="true"
                        name="bio"
                        error_message="Yoh! write something nice about yourself"
                        show_error_inline="true"
                        label="Describe yourself"&gt;&lt;/x-textarea&gt;

                    &lt;div class="text-center"&gt;

                        &lt;x-button
                            name="btn-save"
                            has_spinner="true"
                            type="primary"
                            can_submit="true"
                            class="mt-3"&gt;
                            Sign Up Today
                        &lt;/x-button&gt;

                    &lt;/div&gt;

                &lt;/form&gt;

            &lt;/x-card&gt;
        </code>
    </pre>
    <p>
        Error messages can either be displayed inline or using the <a href="/component/notification">Bladewind
            notification</a> component.
        You will notice we included the Notification component on line 1. On line 5 we have a form with a class of <code
            class="inline">signup-form</code>.
        This class will be used to set up an event listener on the form. On line 16 out input component defines an <code
            class="inline text-red-500">error_message</code> attribute.
        This message is what will be displayed if we validate the form and find that field to be empty. The <code
            class="inline">error_message</code> attribute will
        only be used if the <code class="inline text-red-500">required="true"</code> attribute has been set on the
        input
        component.
    </p>
    <p>
        Our email input has set <code class="inline text-red-500">required="true"</code> but has no <code
            class="inline text-red-500">error_message</code> attribute defined. You will notice
        when we submit the form with no email value, the field is highlighted with a red border but no message is
        displayed.
    </p>
    <p>
        Lastly, our textarea component defines a new attribute on line 36. The <code
            class="inline text-red-500">show_error_inline="true"</code> attribute will display the
        error message beneath the field the attribute was set on.
    </p>
    <p>Below is the javascript that triggers the validation of the form. <code class="inline">dom_el</code>, <code
            class="inline">unhide</code> and <code class="inline">validateForm</code> are helper functions in the
        package.
    </p>
    <pre class="language-js line-numbers" data-line="">
        <code>
            /**
            dom_el(), validateForm(), hide() and unhide()
            are helper functions available in Bcomponents
            **/

            dom_el('.signup-form').addEventListener('submit', function (e){
                e.preventDefault();
                signUp();
            });

            signUp = () => {
                (validateForm('.signup-form')) ?
                    unhide('.btn-save .bw-spinner') : // do this is validated
                    hide('.btn-save .bw-spinner'); // do this if not validated
            }
        </code>
    </pre>

    <h2 id="javascript">Manipulating Inputs Using Javascript</h2>
    <p>
        There are several instances where you will want to manipulate input fields for different reasons.
        Most times, manipulating an input field will be dependent on a user's selection. This can be achieved in
        Javascript since Bcomponents uses the <code class="inline text-red-500">name</code> attribute defined on an
        input as part of its <code class="inline text-red-500">class</code> attribute.
        Let us take a look at a few examples from below.
    </p>

    <h3>Sign Up For Summer Camp</h3>
    <p>
        In the example below any user below 18 years will need to provide the name and email of their guardian.
    </p>
    <x-card>
        <h1 class="my-2 text-2xl font-light text-blue-900/80">Sign up for Summer Camp</h1>
        <p class="mt-3 mb-6 text-blue-900/80 text-sm">
            You are one step away from an awesome summer experience.
        </p>
        <div class="sm:flex gap-4">
            <x-input name="full_name" required="true" label="Full name" />
            <x-input name="age_camp" label="How old are you?" required="true" numeric="true" with_dots="true" />
        </div>
        <b class="guardian-info py-2 block">Who is your guardian?</b>
        <div class="guardian flex gap-4">
            <x-input name="guardian_name_camp" required="true" label="Guardian's Name" />
            <x-input name="guardian_email_camp" label="Guardian's email" onkeyup="showAddress(this.value)" />
        </div>
        <x-input name="guardian_address" placeholder="Guardian's address" class="hidden" />
    </x-card>
    <script>
        dom_el('.age_camp').addEventListener('keyup', (el) => {
            if (el.target.value !== '' && el.target.value < 18) {
                unhide('.guardian-info');
                unhide('.guardian');
            } else {
                hide('.guardian-info');
                hide('.guardian');
            }
        });

        showAddress = (value) => {
            if (value !== '') unhide('.guardian_address');
        }
    </script>
    <br />
    <p>
        Let's take a look at the code for the form and then proceed to look at the Javascript that's triggered.
        Pay attention to lines 4 and 12.
    </p>
    <pre class="language-markup line-numbers" data-line="4,12">
        <code>
            ...
            &lt;div class="flex gap-4"&gt;
                &lt;x-input name="full_name" required="true"  label="Full name" /&gt;
                &lt;x-input name="age_camp" label="How old are you?"
                    required="true" numeric="true" with_dots="true" /&gt;
            &lt;/div&gt;
            &lt;b class="guardian-info py-2 block"&gt;Who is your guardian?&lt;/b&gt;
            &lt;div class="guardian flex gap-4"&gt;
                &lt;x-input name="guardian_name_camp" required="true" label="Guardian's Name" /&gt;
                &lt;x-input name="guardian_email_camp"
                    label="Guardian's email"
                    onkeyup="showAddress(this.value)" /&gt;
            &lt;/div&gt;
            &lt;x-input name="guardian_address" placeholder="Guardian's address" class="hidden" /&gt;
            ...
        </code>
    </pre>
    <p>
        From the above form, we want to perform an action when the value of the <code class="inline">age_camp</code>
        input
        field changes.
        The resultant HTML code generated for the input field is below.
    </p>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;input
                class="bw-input peer required age_camp placeholder-transparent dark:placeholder-transparent"
                type="text"
                id="age_camp"
                name="age_camp"
                value=""
                autocomplete="off"
                placeholder="How old are you?" /&gt;
        </code>
    </pre>
    <p>
        The name we provided to the Input component has been used as part of the <code class="inline">class</code>
        names of
        the component.
        This makes it easy for us to access the component in Javascript. Below is the script that performs the hiding
        and
        unhiding of the DIVs based on the value of the age input.
        In this example we use an event listener on the <code class="inline">age_camp</code> input to listen for any
        changes to the input on keyup.
    </p>
    <p>
        Entering a value in the guardian email field also unhides an address field. This however uses an <code
            class="inline">onkeyup</code> event defined on the input field itself.
    </p>
    <pre class="language-js line-numbers" data-line="2">
        <code>
        // dom_el, unhide and hide are helper functions in Bcomponents
        dom_el('.age_camp').addEventListener('keyup', (el) => {
            if(el.target.value !== ''  && el.target.value < 18 ){
                unhide('.guardian-info');
                unhide('.guardian');
            } else {
                hide('.guardian-info');
                hide('.guardian');
            }
        })

        showAddress = (value) => {
            if(value !== '') unhide('.guardian_address');
        }
        </code>
    </pre>
    <p>
        <x-alert closeIcon="false">
            To manipulate Bcomponents input elements using Javascript, simply target them using the name defined
            either
            in the class or id attributes.
        </x-alert>
    </p>
    <h2 id="prefix-suffix">Prefixes and Suffixes</h2>
    <p>
        There are cases where you need to prefix or append something to an input field. For example, you want to prefix
        a
        URL input field with 'https://' so your users wouldn't need to type that in everytime.
        Or, when asking your app users for their social media handles you may want to always have the '@' prefix. For
        now
        prefixes and suffixes support only text and <a href="/component/icon">icons</a>.
    </p>
    <h3>Prefixes</h3>
    <p class="!mb-4">You can use prefixes even when your input has a label.</p>
    <x-input name="site" label="website address" prefix="https://" />
    <pre class="language-markup">
        <code>
            &lt;x-input name="site" label="website address" prefix="https://" /&gt;
        </code>
    </pre>
    <p class="!mb-3 !pt-8">You can drop the label and use a placeholder instead.</p>
    <x-input name="site2" placeholder="website address" prefix="https://" />
    <x-input name="usd" placeholder="0.00" prefix="USD" numeric />
    <x-input name="twitter" placeholder="Twitter handle" prefix="@" />
    <x-input name="gh" placeholder="username" prefix="https://github.com/" />
    <pre class="language-markup">
        <code>
            &lt;x-input name="site2" placeholder="website address" prefix="https://" /&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-input name="usd" placeholder="0.00" prefix="USD" /&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-input name="twitter" placeholder="Twitter handle" prefix="@" /&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-input name="gh" placeholder="username" prefix="https://github.com/" /&gt;
        </code>
    </pre>
    <h3>Suffixes</h3>
    <p class="!mb-4">Suffixes get appended to the end of the input field</p>
    <x-input name="space" placeholder="workspace-name" suffix=".slack.com" />
    <pre class="language-markup">
        <code>
            &lt;x-input name="space" placeholder="workspace-name" suffix=".slack.com" /&gt;
        </code>
    </pre>
    <x-input name="tnc" placeholder="Your bio. Keep it brief and nice"
        suffix='<a href="#">See some good examples</a>' />
    <pre class="language-markup">
        <code>
            &lt;x-input
                name="tnc"
                placeholder="Your bio. Keep it brief and nice"
                suffix='&lt;a href="#"&gt;See some good examples&lt;/a&gt;' /&gt;
        </code>
    </pre>

    <h3>Prefix and Suffix Transparency</h3>
    <p>
        You can opt for non-transparent prefixes and suffixes by setting the attribute <code
            class="inline text-red-500">transparent_prefix="false"</code> and/or <code
            class="inline text-red-500">transparent_suffix="false"</code>.
        You can specify both a prefix and suffix on your input fields.
    </p>
    <x-input name="usdbg" placeholder="0.00" prefix="USD" numeric transparent_prefix="false" />
    <pre class="language-markup line-numbers" data-line="5">
        <code>
            &lt;x-input
                name="usdbg"
                placeholder="0.00"
                prefix="USD"
                transparent_prefix="false"
                numeric /&gt;
        </code>
    </pre>
    <br />
    <x-input name="spacex" placeholder="workspace-name" suffix=".slack.com" transparent_suffix="false" />
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-input
                name="spacex"
                placeholder="workspace-name"
                transparent_suffix="false"
                suffix=".slack.com" /&gt;
        </code>
    </pre>
    <br />
    <x-input name="spacexx" placeholder="workspace-name" prefix="https://" suffix=".slack.com"
        transparent_prefix="false" transparent_suffix="false" />
    <pre class="language-markup line-numbers" data-line="3,4,6,7">
        <code>
            &lt;x-input
                name="spacexx"
                prefix="https://"
                transparent_prefix="false"
                placeholder="workspace-name"
                suffix=".slack.com"
                transparent_suffix="false" /&gt;
        </code>
    </pre>
    <h2 id="icons">With Icons</h2>
    <p>
        The Bcomponents input field can have an icon for those moments where you want a simple icon to describe the
        field.
        This is not a different kind of input field. We simply make use of prefixes and suffixes to achieve this effect.
        All
        <a href="https://heroicons.com">Heroicons</a> names are supported out of the box.
        You can also specify an SVG tag to be used as an icon.
    </p>
    <p>
        Since input icons are achieved using prefixes, it is important to add the attribute <code
            class="inline text-red-500">prefix_is_icon="true"</code> if you are using icons as prefixes or <code
            class="inline text-red-500">suffix_is_icon="true"</code> if you are using icons as suffixes.
        This way Bladewind forces your prefix or suffix to be an icon and not text. For example: if you specify the
        prefix
        <b>"phone"</b>, by default Bladewind will just display the text <b>"phone"</b> as your prefix. However, if you
        specify
        <code class="inline text-red-500">prefix_is_icon="true"</code>, Bladewind will look for the icon with the name
        <b>"phone"</b> and display that instead.
    </p>
    <br />
    <x-input name="fullname" placeholder="John T. Doe" prefix="user" prefix_is_icon="true" />
    <x-input name="emailic" placeholder="me@bladewindui.com" prefix="envelope" prefix_is_icon="true" />
    <div class="sm:flex gap-4">
        <x-input name="fon" placeholder="0000.000.00" prefix="phone" prefix_is_icon="true" />
        <x-input name="passw" type="password" placeholder="Password" prefix="key" prefix_is_icon="true"
            prefix_icon_css="text-orange-500" viewable="true" />
    </div>
    <x-button class="w-full">Sign Up</x-button>
    <br /><br />
    <pre class="language-markup line-numbers">
        <code>

                &lt;x-input
                    name="fullname"
                    placeholder="John T. Doe"
                    prefix="user"
                    prefix_is_icon="true" /&gt;

                &lt;x-input
                    name="emailic"
                    placeholder="me@bladewindui.com"
                    prefix="envelope"
                    prefix_is_icon="true" /&gt;

                &lt;div class="flex gap-4"&gt;
                    &lt;x-input
                        name="fon"
                        placeholder="0000.000.00"
                        prefix="phone"
                        prefix_is_icon="true" /&gt;

                    &lt;x-input
                        name="passw" type="password"
                        placeholder="Password"
                        prefix="key"
                        prefix_is_icon="true"
                        prefix_icon_css="text-orange-500"
                        viewable="true" /&gt;

                &lt;/div&gt;

                &lt;x-button class="w-full"&gt;Sign Up&lt;/x-button&gt;

        </code>
    </pre>
    <br />
    <p>
        As explained on the Bcomponents <a href="/component/icon">Icon component</a> page, it is possible to use SVG
        tags and custom SVG files as the input icons.
    </p>
    <x-input name="www" placeholder="website address"
        prefix='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
</svg>'
        prefix_is_icon="true" />

    <pre class="language-markup line-numbers">
    <code class="!whitespace-pre-wrap">
    &lt;x-input
    name="www"
    placeholder="website address"
    prefix_is_icon="true"
    prefix='&lt;svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"&gt;
&lt;path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" /&gt;
&lt;/svg&gt;' /&gt;
    </code>
    </pre>
    <br />
    <x-input name="www2" placeholder="website address" transparent_prefix="false"
        prefix='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
</svg>'
        prefix_is_icon="true" />

    <pre class="language-markup line-numbers">
    <code class="!whitespace-pre-wrap">
    &lt;x-input
    name="www"
    placeholder="website address"
    prefix_is_icon="true"
    transparent_prefix="false"
    prefix='&lt;svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"&gt;
&lt;path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" /&gt;
&lt;/svg&gt;' /&gt;
    </code>
    </pre>


    <p>
    <h2 id="attributes">Full List Of Attributes</h2>
    </p>
    <p>The table below shows a comprehensive list of all the attributes available for the Input component.</p>

    <x-table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>name</td>
            <td>input-uniqid()</td>
            <td>Unique name to identify the input element by. Useful for retrieving value from the input when it is
                submitted in a form. The component by default uses a random name prefixed with 'input-'.</td>
        </tr>
        <tr>
            <td>type</td>
            <td>text</td>
            <td>
                Accepts list of valid HTML input element types. <br />
                <code class="inline">text</code> <code class="inline">email</code> <code
                    class="inline">password</code>
                <code class="inline">search</code> <code class="inline">tel</code>
            </td>
        </tr>
        <tr>
            <td>label</td>
            <td><em>blank</em></td>
            <td>Label that describes the input element. Example: Full name</td>
        </tr>
        <tr>
            <td>numeric</td>
            <td>false</td>
            <td>Sepcifies if the input element should accept only numeric characters. <br /><code
                    class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>required</td>
            <td>false</td>
            <td>Specifies if the input element is required or not. When required, a red asterisk is displayed next to
                the
                placeholder or label.<br /> <code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>add_clearing</td>
            <td>true</td>
            <td>Specifies if an 8px margin should be added to the bottom of the element. This ensures your form fields
                are
                evenly spaced by default. <br /><code class="inline">true</code> <code class="inline">false</code>
            </td>
        </tr>
        <tr>
            <td>placeholder</td>
            <td><em>blank</em></td>
            <td>Placeholder text to display in the input element. </td>
        </tr>
        <tr>
            <td><span class="sm:hidden">show_ placeholder_ always</span>
                <span class="sm:block hidden">show_placeholder_always</span>
            </td>
            <td>false</td>
            <td>
                Placeholder text is hidden when the label attribute has a value. Setting this to true always shows the
                placeholder.<br />
                <code class="inline">true</code> <code class="inline">false</code>
            </td>
        </tr>
        <tr>
            <td>error_message</td>
            <td><em>blank</em></td>
            <td>The message to display when the form is validated and field happens to be blank.</td>
        </tr>
        <tr>
            <td>show_error_inline</td>
            <td>false</td>
            <td>Error messages can either be displayed inline or using the Notification component (default).<br /><code
                    class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>error_heading</td>
            <td>Error</td>
            <td>Only used when displaying validation errors using the Notification component. Because the validation
                errors
                are triggered from javascript, it may not be easy to translate the heading of the notification message.
                This
                provides a way to specify a translatable heading for the error.</td>
        </tr>
        <tr>
            <td>selected_value</td>
            <td><em>blank</em></td>
            <td>Default value to display in the input element. Useful when in edit mode.</td>
        </tr>
        <tr>
            <td>with_dots</td>
            <td>true</td>
            <td>
                Mostly relevant if <code class="inline">numeric="true"</code>. Determines if numeric values can contain
                dots or not.<br />
                <code class="inline">true</code> <code class="inline">false</code>
            </td>
        </tr>
        <tr>
            <td>prefix</td>
            <td>blank</td>
            <td>
                Specify the prefix for the input field
            </td>
        </tr>
        <tr>
            <td>prefix_is_icon</td>
            <td>false</td>
            <td>
                If prefix is specified, is it an icon. By default prefixes are treated as text.<br />
                <code class="inline">true</code> <code class="inline">false</code>
            </td>
        </tr>
        <tr>
            <td>prefix_icon_type</td>
            <td>outline</td>
            <td>
                If an icon is used as a prefix, should it be a solid or outline icon..<br />
                <code class="inline">outline</code> <code class="inline">solid</code>
            </td>
        </tr>
        <tr>
            <td>transparent_prefix</td>
            <td>true</td>
            <td>
                If a prefix is defined, should it have a transparent background or not.<br />
                <code class="inline">true</code> <code class="inline">false</code>
            </td>
        </tr>
        <tr>
            <td>prefix_icon_div_css</td>
            <td>blank</td>
            <td>
                Additional css classes to apply to the DIV containing the prefix if <b>prefix_is_icon=true</b>. Can be
                any
                TailwindCSS classes.
            </td>
        </tr>
        <tr>
            <td>prefix_icon_css</td>
            <td>blank</td>
            <td>
                Additional css classes to apply to the prefix if <b>prefix_is_icon=true</b>. Can be any TailwindCSS
                classes
                that work on icons.
            </td>
        </tr>
        <tr>
            <td>suffix</td>
            <td>blank</td>
            <td>
                Specify the suffix for the input field
            </td>
        </tr>
        <tr>
            <td>suffix_is_icon</td>
            <td>false</td>
            <td>
                If suffix is specified, is it an icon. By default suffixes are treated as text.<br />
                <code class="inline">true</code> <code class="inline">false</code>
            </td>
        </tr>
        <tr>
            <td>suffix_icon_type</td>
            <td>outline</td>
            <td>
                If an icon is used as a suffix, should it be a solid or outline icon.<br />
                <code class="inline">outline</code> <code class="inline">solid</code>
            </td>
        </tr>
        <tr>
            <td>transparent_suffix</td>
            <td>true</td>
            <td>
                If a suffix is defined, should it have a transparent background or not.<br />
                <code class="inline">true</code> <code class="inline">false</code>
            </td>
        </tr>
        <tr>
            <td>suffix_icon_div_css</td>
            <td>blank</td>
            <td>
                Additional css classes to apply to the DIV containing the suffix if <b>suffix_is_icon=true</b>. Can be
                any
                TailwindCSS classes.
            </td>
        </tr>
        <tr>
            <td>suffix_icon_css</td>
            <td>blank</td>
            <td>
                Additional css classes to apply to the suffix if <b>suffix_is_icon=true</b>. Can be any TailwindCSS
                classes
                that work on icons.
            </td>
        </tr>
        <tr>
            <td>viewable</td>
            <td>false</td>
            <td>
                Works only if <b>type=password</b>. Should the password be viewable? If <code
                    class="inline">true</code>,
                an eye icon is displayed in the input field.<br />
                <code class="inline">true</code> <code class="inline">false</code>
            </td>
        </tr>
    </x-table>
    <h3>Input with all attributes defined</h3>
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-input
                name="pin"
                label="Enter PIN"
                placeholder=""
                type="password"
                numeric="false"
                add_clearing="false"
                required="true"
                error_message="PIN can only be 4 digits"
                show_error_inline="true"
                error_heading="Bugged"
                with_dots="true"
                show_placeholder_always="true"
                selected_value=""
                prefix="Email"
                transparent_prefix="false"
                prefix_is_icon="false"
                prefix_icon_type="solid"
                prefix_icon_css=""
                suffix="@gmail.com"
                transparent_suffix="false"
                suffix_is_icon="false"
                suffix_icon_type="solid"
                suffix_icon_css=""
                viewable="false"
            /&gt;
        </code>
    </pre>

    <p>&nbsp;</p>
    <x-alert closeIcon="false">
        The source file for this component is available in <code class="inline">resources > views > components >
            bladewind
            > input.blade.php</code>
    </x-alert>
    <p>&nbsp;</p>

    <x-slot:sideNavigation>
        <div class="flex items-center">
            <div class="dot"></div><a href="#password">Password Input</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#numeric">Numeric Input</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#labels-placeholders">Labels & Placeholders</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#required">Required Input Fields</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#events-validations">Events & Validations</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#javascript">Javascript manipulations</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#prefix-suffix">Prefixes and suffixes</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#icons">With Icons</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:sideNavigation>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-input');

            dom_el('.signup-form').addEventListener('submit', function(e) {
                e.preventDefault();
                signUp();
            });

            signUp = () => {
                (validateForm('.signup-form')) ?
                unhide('.btn-save .bw-spinner'):
                    hide('.btn-save .bw-spinner');
            }
        </script>
    </x-slot>
</div>
