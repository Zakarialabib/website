<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Verification Code Component</x-slot:title>
    <x-slot:page_title>Verification Code</x-slot:page_title>

    <p>
        Display a set of input fields to accept verification code from a user. It is common place to add email and phone
        number verification to websites these days.
        These codes range from four to six digits. The verification code Bladewind component however, allows you to
        specify how many digits you want the enduser to type, by specifying the
        <code class="inline text-red-500">total_digits</code> attribute. There is no restriction on the maximum value you
        can specify for the <code class="inline">total_digits</code>. In a finance app, you could
        use this to collect account numbers. The default number of digits displayed by the component is four (4). We
        interchange the words PIN, PIN code and verification code. We mean the same thing.
    </p>
    <br />
    <p><x-code /></p>
    <pre class="language-markup">
        <code>
            &lt;x-code  /&gt;
        </code>
    </pre>
    <br />
    <br />
    <p><x-code total_digits="5" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-code total_digits="5"  /&gt;
        </code>
    </pre>
    <h2 id="code">Access the Verification Code</h2>
    <p>
        What happens after the user enters their verification code? The component creates a hidden input field with the
        name passed to the <code class="inline text-red-500">name</code> attribute.
    </p>
    <pre class="language-markup">
            <code>
                &lt;x-code name="pin_code"  /&gt;
            </code>
        </pre>
    <p>The above will create the input fields for the verification codes and create the hidden input below</p>
    <pre class="language-markup">
            <code>
                &lt;input type="hidden" name="pin_code" class="pin_code ..." id="pin_code"  /&gt;
            </code>
        </pre>
    <p>
        You can access the value of <code class="inline">pin_code</code> either via Javascript or via PHP if you intend
        to post it in a form to your backend.
        The <code class="inline text-red-500">on_verify</code> attribute allows you to specify a function that should be
        called when the user has entered a value into the last verification code field.
        This should just be the function name without parentheses and parameters. If you wish to call <code
            class="inline">verifyPin()</code> after the user enters the pin/code, just type
        <code class="inline text-red-500">on_verify="verifyPin"</code>. The component passes the code entered by the
        user to your function, so, your function declaration needs to expect one parameter.
        Still using the <em>verifyPin</em> example, your function declaration will be:
    </p>
    <pre class="language-js">
            <code>
                verifyPin = (code) => {

                    // do something here with the code
                }
            </code>
        </pre>
    <p>
        Let's consider a practical example. Enter any code in the fields below and get notified of the code you entered.
    </p><br />
    <p>
        <x-code total_digits="5" on_verify="checkPin" />
        <script>
            checkPin = (code) => {
                alert(`You entered: ${code}`);
            }
        </script>
    </p>
    <pre class="language-markup">
            <code>
                &lt;x-code
                    total_digits="5"
                    on_verify="checkPin" /&gt;


                &lt;script&gt;
                    checkPin = (code) => {
                        alert(`You entered: ${code}`);
                    }
                &lt;/script&gt;
            </code>
        </pre>

    <h2 id="clearpin">Clear PIN/Code</h2>
    <p>
        There are cases where you will want to clear the verification code input fields. Probably after a user enters a
        wrong code, you clear the fields so they can enter the code all over again.
        There is also the case where you require a pin code to be entered to authorize payments or other actions on your
        web app.
        If you have the verification code in a <a href="/component/modal">Modal component</a>, the values entered may
        persist everytime the modal is opened.
    </p>
    <p>
        <code class="inline">clearPin(name)</code> is a helper Javascript function that easily lets you reset your
        verification codes.
    </p>
    <pre class="language-markup">
            <code>
                &lt;x-code name="pin_code"  /&gt;
            </code>
        </pre>
    <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;script&gt;
                    checkPin = (code) => {
                        if( code !== '20201') {
                            clearPin('pin_code');
                        }
                    }
                &lt;/script&gt;
            </code>
        </pre>

    <h2 id="errors">Displaying Errors</h2>
    <p>
        The verification code component comes with a hidden field that has the error message to display when validation
        fails for the code the user entered.
        To make this translatable, the error message is defined on the component using the <code
            class="inline text-red-500">error_message</code> attribute.
    </p>
    <p>
        The error message is displayed by invoking the Javascript helper function <code
            class="inline">showPinError(name)</code>.
        It accepts the name provided to the code component as a parameter. The error message can be hidden by calling
        the
        <code class="inline">hidePinError(name)</code> Javascript helper function.
    </p>
    <p>The verification code below is supposed to be <strong>2022</strong>. Enter any other code and see how the error
        is displayed. </p>
    <p>
        <x-code name="pcode" error_message="Yoh! check your code" on_verify="checkPinCode" />
    </p>
    <pre class="language-markup">
        <code>
            &lt;x-code
                name="pcode"
                error_message="Yoh! check your code"
                on_verify="checkPinCode" /&gt;
        </code>
    </pre>
    <script>
        checkPinCode = (code) => {
            if (code !== '2022') {
                clearPin('pcode');
                showPinError('pcode');
            }
        }
    </script>

    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;script&gt;
                checkPinCode = (code) => {
                    if( code !== '2022') {
                        clearPin('pcode');
                        // accepts name of the code
                        // component as a parameter
                        showPinError('pcode');
                    }
                }
            &lt;/script&gt;
        </code>
    </pre>
    <h2 id="spinner">Show the Spinner</h2>
    <p>
        The verification code component comes with a hidden spinner that can be made visible by invoking the <code
            class="inline">showSpinner(name)</code> Javascript helper function.
        It accepts the name provided to the code component as a parameter. The verification code spinner can be useful
        if your verification is done via an ajax call to an API that may take a second or two.
        Showing the spinner will let the user know you are performing an action. The error message can be hidden by
        calling the
        <code class="inline">hideSpinner(name)</code> Javascript helper function.
    </p><br />
    <p>
        <x-code name="spin_me" on_verify="validatePin" />
    </p>
    <pre class="language-markup">
        <code>
            &lt;x-code
                name="spin_me"
                on_verify="validatePin"  /&gt;
        </code>
    </pre>
    <script>
        validatePin = (code) => {
            showSpinner('spin_me');
        }
    </script>

    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;script&gt;
                validatePin = (code) => {
                    showSpinner('spin_me');
                    ajaxCall('/verify/pin', `code=${code}`, ...
                }
            &lt;/script&gt;
        </code>
    </pre>

    <h2 id="success">Show Success Icon</h2>
    <p>
        The verification code component also comes with a hidden checkmark to show when a pin is valid. This can be
        invoked using the <code class="inline">showPinSuccess(name)</code> Javascript helper function.
        It accepts the name provided to the code component as a parameter. In the example below, the spinner shows after
        the code is entered and disappears to give way to the checkmark after 5 seconds.
    </p><br />
    <p>
        <x-code name="spin_me_yes" on_verify="spinAndSucceed" />
    </p>
    <pre class="language-markup">
        <code>
            &lt;x-code
                name="spin_me"
                on_verify="spinAndSucceed"  /&gt;
        </code>
    </pre>
    <script>
        spinAndSucceed = (code) => {
            showSpinner('spin_me_yes');
            setTimeout(() => {
                showPinSuccess('spin_me_yes');
            }, 5000);
        }
    </script>
    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;script&gt;
                    spinAndSucceed = (code) => {
                    showSpinner('spin_me_yes');
                    setTimeout(()=>{
                       showPinSuccess('spin_me_yes');
                    }, 5000);
                }
            &lt;/script&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Spinner component.</p>

    <x-table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>name</td>
            <td>pin-code-{uniqid()}</td>
            <td>Unique name for the component. The code entered by the enduser will be available in an input field with
                the specified name. If for example you named your component <code class="inline">vcode</code>,
                the following input will be created and have the value of the full code the user entered <code
                    class="inline"><input type="hidden" name="vcode" /></code>.</td>
        </tr>
        <tr>
            <td>total_digits</td>
            <td>6</td>
            <td>Determines number of input boxes to be created for entry of the verification code. Any realistic number.
            </td>
        </tr>
        <tr>
            <td>on_verify</td>
            <td><em>blank</em></td>
            <td>
                Function to call after user has finished entering the codes. When passed, this function will be
                triggered when the user enters a number into the last input field.
                This should just be the function name without parentheses and parameters. If you wish to call <code
                    class="inline">verifyPin()</code> after the user enters the pin,
                just type <code class="inline text-red-500">on_verify="verifyPin"</code>. The component passes the code
                to your function, so, your function declaration needs to expect one parameter.
                Still using the <code>verifyPin</code> example, your function declaration should be <code
                    class="inline">verifyPin = (code) => { ... }</code>

            </td>
        </tr>
        <tr>
            <td>error_mesage</td>
            <td>Verification code is invalid</td>
            <td>Error message to display when the verification code entered is invalid</td>
        </tr>
    </x-table>
    <h3>Verification Code with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-code
                name="pin-code"
                total_digits="5"
                on_verify="verifyPin"
                has_spinner="false"
                error_message="please enter the correct pin code"  /&gt;
        </code>
    </pre>

    <x-alert closeIcon="false">
        The source file for this component is available in <code class="inline">resources > views > components >
            bladewind > code.blade.php</code>
    </x-alert>
    <p>&nbsp;</p>

    <x-slot:sideNavigation>
        <div class="flex items-center">
            <div class="dot"></div><a href="#code">Access the verification code</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#clearpin">Clear PIN/code</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#errors">Displaying errors</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#spinner">Show the spinner</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#success">Show success icon</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:sideNavigation>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-code');

            function verifyPin(pin) {
                console.log(pin);
            }
        </script>
    </x-slot>

</div>
