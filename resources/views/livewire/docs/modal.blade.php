<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Modal Component</x-slot:title>
    <x-slot:page_title>Modal</x-slot:page_title>
    <p>
        The modal component is useful for displaying content that is overlayed on the primary page content.
    </p>

    <h2 id="default">Default Modal</h2>
    <p>
        Modals are mostly displayed when an action is triggered, say when a button is clicked.
        All Bcomponents modals are invoked via a javascript helper function bundled with the component.
        <code class="inline text-red-500">showModal('name-of-modal');</code>. Like with all Bcomponents components,
        the syntax for cooking up a modal is very simple.
    </p>
    <div class="space-x-4">
        <x-button onclick="showModal('tnc-agreement')">Basic modal</x-button>
        <x-button onclick="showModal('tnc-agreement-titled')" class="mt-2 sm:mt-0">Basic modal with a title</x-button>
    </div>
    <p>
        <x-modal name="tnc-agreement" close_icon="true">
            Please agree to the terms and conditions of the agreement before proceeding. By clicking the OKAY button you
            agree to let your machine explode 💥
        </x-modal>
        <x-modal name="tnc-agreement-titled" title="Agree or Disagree">
            Please agree to the terms and conditions of the agreement before proceeding.
        </x-modal>
    </p>

    <pre class="language-markup line-numbers" data-line="11,17">
        <code>
            &lt;x-button
                onclick="showModal('tnc-agreement')"&gt;
                Basic modal
            &lt;/x-button&gt;

            &lt;x-button
                onclick="showModal('tnc-agreement-titled')"&gt;
                Basic modal with a title
            &lt;/x-button&gt;

            &lt;x-modal
                name="tnc-agreement"&gt;
                Please agree to the terms and conditions of
                the agreement before proceeding.
            &lt;/x-modal&gt;

            &lt;x-modal
                name="tnc-agreement-titled"
                title="Agree or Disagree"&gt;
                Please agree to the terms and conditions of
                the agreement before proceeding.
            &lt;/x-modal&gt;
        </code>
    </pre>

    <p>
        <x-alert closeIcon="false">
            IMPORTANT: Bcomponents Modals are created, targetted and invoked using the <code
                class="inline text-red-500">name</code> attribute.
            You can have several modals on the same page but it is very important to provide unique names for each
            modal.
        </x-alert>
    </p>
    <p>
        Clicking on the backdrop of the modal or on the cancel button will by default dismiss the modal. You probably
        guessed it. The <code class="inline text-red-500">hideModal('name-of-modal');</code> helper function is called
        to
        dismiss modals.
        It is possible to prevent the backdrop or the cancel button from closing the modal. See the <a
            href="#cant-dismiss">Non-dismissed modal</a> section below.
    </p>

    <h2 id="types">Different Types</h2>
    <p>
        The Bcomponents modal component comes prebuilt with some default types for the common use cases.
        This can be achieved by setting the <code class="inline text-red-500">type</code> attribute on the modal
        component.
        The default <code class="inline text-red-500">type=""</code>.
        All the type attribute does is append the appropriate icons that match the type of modal.
    </p>
    <h3>Info Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">type="info"</code> on the modal component. The
        default
        icon changes to a blue info icon.
    </p>
    <p>
        <x-button onclick="showModal('info')">Info Modal</x-button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-button onclick="showModal('info')"&gt;
                Info Modal
            &lt;/x-button&gt;

            &lt;x-modal
                type="info"
                title="General Info"
                name="info"&gt;
                We really think you should buy some Bitcoin
                despite it's ups and dowms. What sayeth thou?
            &lt;/x-modal&gt;
        </code>
    </pre>
    <h3>Error Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">type="error"</code> on the modal component. The
        default
        icon changes to a red exclamation mark.
    </p>
    <p>
        <x-button onclick="showModal('error')">Error Modal</x-button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-button onclick="showModal('error')"&gt;
                Error Modal
            &lt;/x-button&gt;

            &lt;x-modal
                type="error"
                title="Delete Not Allowed"
                name="error"&gt;
                You do not have permissions to delete this user.
            &lt;/x-modal&gt;
        </code>
    </pre>
    <h3>Warning Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">type="warning"</code> on the modal component. The
        default icon changes to a yellow bell icon.
    </p>
    <p>
        <x-button onclick="showModal('warning')">Warning Modal</x-button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-button onclick="showModal('warning')"&gt;
                Warning Modal
            &lt;/x-button&gt;

            &lt;x-modal
                type="warning"
                title="First warning"
                name="warning"&gt;
                Hmmm...This is your first warning.
                Two more warnings and you are off this platform.
            &lt;/x-modal&gt;
        </code>
    </pre>
    <h3>Success Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">type="success"</code> on the modal component. The
        default icon changes to a green thumbs up icon.
    </p>
    <p>
        <x-button onclick="showModal('success')">Success Modal</x-button>
    </p>

    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-button onclick="showModal('success')"&gt;
                Success Modal
            &lt;/x-button&gt;

           &lt;x-modal
                type="success"
                title="User Deleted"
                name="success"&gt;
                Yayy.. User deleted successfully
            &lt;/x-modal&gt;
        </code>
    </pre>
    <h3>Stretched Action Buttons</h3>
    <p>
        Some users prefer to have their action buttons span the entire width of the modal. To achieve this simply set
        <code class="inline text-red-500">stretched_action_buttons="true"</code> on the modal component.
    </p>
    <p>
        <x-button onclick="showModal('stretched')">Stretched Buttons Modal</x-button>
    </p>

    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-button onclick="showModal('stretched')"&gt;
                Success Modal
            &lt;/x-button&gt;

           &lt;x-modal
                title="Stretched Buttons"
                stretched_action_buttons="true"
                name="stretched"&gt;
                The action buttons in this modal have been stretched.
                This means each button gets its own line. Cool right?
            &lt;/x-modal&gt;
        </code>
    </pre>

    <h3>No Backdrop Blurring</h3>
    <p>
        If you want the backdrop of the modals to be clear to reveal the content behind the modal you can set <code
            class="inline text-red-500">blur_backdrop="false"</code>.
    </p>
    <p>
        <x-button onclick="showModal('noblur')">No Backdrop Blurring</x-button>
    </p>

    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-button onclick="showModal('noblur')"&gt;
                No Backdrop Blurring
            &lt;/x-button&gt;

           &lt;x-modal
                title="See Through Me"
                blur_backdrop="true"
                name="noblur"&gt;
                The backdrop of this modal is not blurred.
                You can see all the content behind the backdrop.
            &lt;/x-modal&gt;
        </code>
    </pre>

    <x-modal type="info" title="General Info" name="info">
        There will be eclipse of the moon every couple of years. Just keep looking up, you might see one in action.
    </x-modal>
    <x-modal type="error" title="Delete Not Allowed" name="error">
        You do not have permissions to delete this user.
    </x-modal>
    <x-modal type="warning" title="First warning" name="warning">
        Hmmm...This is your first warning. Two more warnings and you are off this platform.
    </x-modal>

    <x-modal type="success" title="User Deleted" name="success">
        The user info is gone for good. Don't expect to see it in the archives.
    </x-modal>



    <x-modal title="See Through Me" name="noblur" blur_backdrop="false">
        The backdrop of this modal is not blurred. You can see all the content behind the backdrop.
    </x-modal>

    <h2 id="sizes">Different Sizes</h2>
    <p>
        <x-alert closeIcon="false" show_icon="false">On mobile the modal has just one size</x-alert>
    </p>
    <p>
        You could tell the above modals looked quite squashed. The Bcomponents modal component comes with a size
        option
        that allows your content to breath in the modals.
        This can be achieved by setting the <code class="inline text-red-500">size</code> attribute on the modal
        component.
        The default <code class="inline text-red-500">size="small"</code>.
        Below are all the available sizes. All sizes are the same on mobile.
    </p>
    <h3>Tiny Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="tiny"</code> on the modal component.
    </p>
    <p>
        <x-button onclick="showModal('tiny-modal')">Tiny Modal</x-button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-button onclick="showModal('tiny-modal')"&gt;
                Tiny Modal
            &lt;/x-button&gt;

            &lt;x-modal
                size="tiny"
                title="Tiny Modal"
                name="tiny-modal"&gt;
                I am the tiniest in the modal family. Don't hate.
            &lt;/x-modal&gt;
        </code>
    </pre>
    <h3>Small Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="small"</code> on the modal component.
    </p>
    <p>
        <x-button onclick="showModal('small-modal')">Small Modal</x-button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-button onclick="showModal('small-modal')"&gt;
                Small Modal
            &lt;/x-button&gt;

            &lt;x-modal
                size="small"
                title="Small Modal"
                name="small-modal"&gt;
                I am the smallest in the modal family. Don't hate.
            &lt;/x-modal&gt;
        </code>
    </pre>
    <h3>Medium Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="medium"</code> on the modal component.
        This is the default so it is not really necessary to set the attribute on the component if you want to use the
        medium modal size.
    </p>
    <p>
        <x-button onclick="showModal('medium-modal')">Medium Modal</x-button>
    </p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-button onclick="showModal('medium-modal')"&gt;
                Medium Modal
            &lt;/x-button&gt;

            &lt;x-modal
                title="Medium Modal"
                name="medium-modal"&gt;
                I am the medium sized modal.
                Also the default if you do not set a size.
            &lt;/x-modal&gt;
        </code>
    </pre>
    <h3>Big Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="big"</code> on the modal component.
    </p>
    <p>
        <x-button onclick="showModal('big-modal')">Big Modal</x-button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-button onclick="showModal('big-modal')"&gt;
                Big Modal
            &lt;/x-button&gt;

            &lt;x-modal
                size="big"
                title="Big Modal"
                name="big-modal"&gt;
                English can be quite confusing.
                How is big different from large? You be the judge!
            &lt;/x-modal&gt;
        </code>
    </pre>
    <h3>Large Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="large"</code> on the modal component.
    </p>
    <p>
        <x-button onclick="showModal('large-modal')">Large Modal</x-button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-button onclick="showModal('large-modal')"&gt;
                Large Modal
            &lt;/x-button&gt;

           &lt;x-modal
                size="large"
                title="Large Modal"
                name="large-modal"&gt;
                I am the large modal. If I am not large enough to contain
                your needs, check out my xl brother.
            &lt;/x-modal&gt;
        </code>
    </pre>
    <h3>XL Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="xl"</code> on the modal component.
    </p>
    <p>
        <x-button onclick="showModal('xl-modal')">xl Modal</x-button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-button onclick="showModal('xl-modal')"&gt;
                Xl Modal
            &lt;/x-button&gt;

           &lt;x-modal
                size="xl"
                title="XL Modal"
                name="xl-modal"&gt;
                I am the extra large modal. How do you like my size now.
                You could fill me up with some much needed content.
            &lt;/x-modal&gt;
        </code>
    </pre>
    <h3>OMG Modal a.k.a Full Width Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="omg"</code> on the modal component.
    </p>
    <p>
        <x-button onclick="showModal('omg-modal')">omg Modal</x-button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-button onclick="showModal('omg-modal')"&gt;
                OMG Modal
            &lt;/x-button&gt;

           &lt;x-modal
                size="omg"
                title="Full Width Modal"
                name="omg-modal"&gt;
                I am the full width modal. My nickname is OMG.
                I take up the entire screen. I do not know why
                you will need a modal like this but well, like they say,
                it is better to have and not use that need and not have.
            &lt;/x-modal&gt;
        </code>
    </pre>
    <x-modal size="tiny" title="Tiny Modal" name="tiny-modal">
        I am the tiniest in the modal family. I am probably rarely used.
    </x-modal>
    <x-modal size="small" title="Small Modal" name="small-modal">
        I am the smallest in the modal family. I am probably the second most used.
    </x-modal>
    <x-modal size="medium" title="Medium Modal" name="medium-modal">
        I am the medium sized modal. Also the default if you do not set a size.
    </x-modal>
    <x-modal size="big" title="Big Modal" name="big-modal">
        English can be quite confusing. How is big different from large? You be the judge!
    </x-modal>
    <x-modal size="large" title="Large Modal" name="large-modal">
        I am the large modal. If I am not large enough to contain your needs, check out my xl brother.
    </x-modal>
    <x-modal size="xl" title="XL Modal" name="xl-modal">
        I am the extra large modal. How do you like my size now. You could fill me up with some much needed content.
    </x-modal>
    <x-modal size="omg" title="Full Width Modal" name="omg-modal">
        I am the full width modal. My nickname is OMG. I take up the entire screen. I do not know why you will need a
        modal
        like this but well,
        like they say, it is better to have and not use that need and not have.
    </x-modal>

  
    <p>
        We also introduced the attribute <code class="inline text-red-500">close_after_action="false"</code>.
        By default, the modal is dismissed after clicking any of the action buttons. Setting this attribute to <code
            class="inline text-red-500">false</code> will ensure the modal stays open after clicking any of the action
        buttons.
    </p>
    <h3>Close Icon</h3>
    <p>
        Closing of the modal is delegated mostly to the Cancel or Close button in the footer of the modal. It is,
        however,
        possible to close modals using a close icon placed in the top right of the modal.
        To enable this, you will need to set <code class="text-red-500 inline">close_icon="true"</code>. <a
            href="javascript:showModal('tnc-agreement')">Here is an example.</a>
    </p>

    <h2 id="cant-dismiss">Non-Dismissible Modal</h2>
    <p>By default the modal component can be closed using the backdrop or any of the action buttons. There are cases
        when
        you really don't want the user to dismiss the modal until a choice has been made or an action has been
        performed.
    </p>
    <p>Getting this result is simple. Just set <code class="inline text-red-500">backdrop_can_close="false"</code>. If
        you
        are using the modals with the action buttons you will also need to set the actions of each button. See <a
            href="#actions">Action Buttons</a> above.</p>
    <p>In this example, we assume your app is very data sensitive and you want users to be able to lock their screens
        when
        stepping away from their computers.</p>
    <p>
        <x-alert type="warning" closeIcon="false" show_icon="false">Refresh the page to get out of locked
            mode</x-alert>
    </p>
    <p>
        <x-button onclick="showModal('lock-screen')" icon="lock-closed" class="text-white">lock the screen</x-button>
    </p>
    <x-modal size="medium" show_action_buttons="false" backdrop_can_close="false" name="lock-screen">
        <div class="my-4">
            You will need to unlock the screen to continue using this application.
        </div>
        <x-input placeholder="Enter your password to unlock" type="password" />
        <x-button class="w-full">Check password</x-button>

    </x-modal>

    <pre class="language-markup line-numbers" data-line="7">
        <code>
            &lt;x-button onclick="showModal('lock-screen')"&gt;
                &lt;svg&gt;...&lt;/svg&gt; lock the screen
            &lt;/x-button&gt;

            &lt;x-modal
                backdrop_can_close="false"
                name="lock-screen"&gt;

                    &lt;div class="my-4"&gt;
                        You will need to unlock the screen to continue using this application.
                    &lt;/div&gt;

                    &lt;x-input
                        placeholder="Enter your password to unlock"
                        type="password" /&gt;

                    &lt;x-button class="w-full"&gt;Check password&lt;/x-button&gt;

            &lt;/x-modal&gt;
        </code>
    </pre>

    <h2 id="forms">Submitting Form Using Action Button</h2>
    <p>
        There may be instances where you want to load a form in a modal and only submit the form when the user clicks on
        the
        Okay or Save action button.
        Submitting the form should also happen ONLY if all validations have passed. The modal component itself does not
        provide a magical way of achieving this but the code below implements the logic we just described.
    </p>
    <p>
        <x-button onclick="showModal('form-mode')" icon="lock" class="text-white">Edit Profile</x-button>
    </p>
    <x-modal backdrop_can_close="false" name="form-mode" 
        close_after_action="false">
        <form method="get" action="" class="profile-form">
            <b>Edit Your Profile</b>
            <div class="grid grid-cols-2 gap-4 mt-6">
                <x-input required="true" name="first_name" label="First name"
                    error_message="Please enter your first name" />
                <x-input required="true" name="last_name" label="Last name"
                    error_message="Please enter your last name" />
            </div>
            <x-input required="true" name="email" label="Email address" error_message="Please enter your email" />
            <x-input numeric="true" name="mobile" label="Mobile" />
        </form>
    </x-modal>
    <script>
        saveProfile = () => {
            if (validateForm('.profile-form')) {
                domEl('.profile-form').submit();
            } else {
                return false;
            }
        }
    </script>

    <pre class="language-markup line-numbers" data-line="5">
        <code>
            // the modal and its form
            &lt;x-modal
                backdrop_can_close="false"
                name="form-mode"
                close_after_action="false"
                &gt;

                &lt;form method="post" action="" class="profile-form"&gt;
                    @@csrf
                    &lt;b class="mt-0"&gt;Edit Your Profile&lt;/b&gt;
                    &lt;div class="grid grid-cols-2 gap-4 mt-6"&gt;
                        &lt;x-input required="true" name="first_name"
                            error_message="Please enter your first name" label="First name" /&gt;

                        &lt;x-input required="true" name="last_name"
                             error_message="Please enter your last name" label="Last name" /&gt;
                    &lt;/div&gt;
                    &lt;x-input required="true" name="email"
                         error_message="Please enter your email" label="Email address" /&gt;

                    &lt;x-input numeric="true" name="mobile" label="Mobile" /&gt;
                &lt;/form&gt;

            &lt;/x-modal&gt;
        </code>
    </pre>

    <pre class="language-js line-numbers" data-line="3">
        <code>
            // the script called by the Update button
            saveProfile = () => {
                if(validateForm('.profile-form')){
                    domEl('.profile-form').submit();
                } else {
                    return false;
                }
            }
        </code>
    </pre>
    <p>
        The "Update" button from the modal above calls a <code class="inline">saveProfile()</code> Javascript function
        when
        it is clicked on
        <code class="inline text-red-500">ok_button_action="saveProfile()"</code>. In the Javascript function, we
        validate
        the profile form
        <code class="inline">class="profile-form"</code> using the
        <code class="inline">validateForm()</code> helper function available in Bcomponents. We then submit the form
        if
        all required fields are not empty.
        The form above uses <code class="inline text-red-500">method="get"</code> so you can see the form fields passed
        as
        query strings in the URL.
    </p>
    <p>
        By default Bcomponents modals close when either of the action buttons are clicked. To prevent our modal from
        closing when the user clicks on the Update button, we
        set the <code class="inline text-red-500">close_after_action="false"</code> attribute.
    </p>
    <h3>Using Ajax</h3>
    <p>
        In the next example our form is submitted via Ajax. The example makes use of the <a
            href="/component/process-indicator">Process Indicator</a> component to show progress.
    </p>
    <p>
        <x-button onclick="showModal('form-mode-ajax')" icon="lock" class="text-white">Edit Profile
            Ajax</x-button>
    </p>
    <x-modal backdrop_can_close="false" name="form-mode-ajax" 
         close_after_action="false">
        <form method="get" action="" class="profile-form-ajax">
            @csrf
            <b>Edit Your Profile</b>
            <div class="grid grid-cols-2 gap-4 mt-6">
                <x-input required="true" name="first_name2" label="First name"
                    error_message="Please enter your first name" />
                <x-input required="true" name="last_name2" label="Last name"
                    error_message="Please enter your last name" />
            </div>
            <x-input required="true" name="email2" label="Email address" error_message="Please enter your email" />
            <x-input numeric="true" name="mobile2" label="Mobile" />
        </form>

    </x-modal>
    <script>
        saveProfileAjax = () => {
            if (validateForm('.profile-form-ajax')) {
                // show process indicator while you make your ajax call
                unhide('.profile-updating');
                hide('.profile-form-ajax');
                hideModalActionButtons('form-mode-ajax');
                // make the call
                makeAjaxCall(serialize('.profile-form-ajax'));
            } else {
                return false;
            }
        }

        makeAjaxCall = (formData) => {
            // this is a dummy function but your real function
            // will make a call and post all the data
            setTimeout(() => {
                // do these when your ajax call is done saving your data
                hide('.profile-updating');
                unhide('.profile-update-yes')
            }, 5000);
        }
    </script>

    <pre class="language-markup line-numbers" data-line="6,8,23,27,31">
        <code>
        // the modal and its form.

        &lt;x-modal
            backdrop_can_close="false"
            name="form-mode-ajax"
            close_after_action="false"&gt;

            &lt;form method="get" action="" class="profile-form-ajax"&gt;
                @@csrf
                &lt;b&gt;Edit Your Profile&lt;/b&gt;
                &lt;div class="grid grid-cols-2 gap-4 mt-6"&gt;
                    &lt;x-input required="true" name="first_name2"
                        label="First name" error_message="Please enter your first name" /&gt;
                    &lt;x-input required="true" name="last_name2"
                        label="Last name" error_message="Please enter your last name" /&gt;
                &lt;/div&gt;
                &lt;x-input required="true" name="email2"
                        label="Email address" error_message="Please enter your email" /&gt;
                &lt;x-input numeric="true" name="mobile2" label="Mobile" /&gt;
            &lt;/form&gt;

        &lt;/x-modal&gt;
        </code>
    </pre>

    <pre class="language-js line-numbers" data-line="3">
        <code>
        // the script called by the Update button
        saveProfileAjax = () => {
            if(validateForm('.profile-form-ajax')){
                // show process indicator while you make your ajax call
                unhide('.profile-updating');
                hide('.profile-form-ajax');
                hideModalActionButtons('form-mode-ajax');
                // make the call
                makeAjaxCall(serialize('.profile-form-ajax'));
            } else {
                return false;
            }
        }

        makeAjaxCall = (formData) => {
            // this is a dummy function but your real function
            // will make a call and post all the data
            setTimeout(() => {
                // do these when your ajax call is done saving your data
                hide('.profile-updating');
                unhide('.profile-update-yes')
            }, 5000);
        }
        </code>
    </pre>
    <p>
        The example above follows the same principle as the first, except we submit the form via Ajax.
        When the Update button is clicked the <code class="inline">saveProfileAjax()</code> function is called.
        This validates the form and hides the action buttons of the modal if validation passes.
        We don't want the user canceling the form submission or clicking the Update button a second time.
        The form is also hidden while the process indicator is displayed. Lastly, the form data is passed to the <code
            class="inline">makeAjaxCall()</code> function.
    </p>
    <p>
        You will need to flesh out the makeAjaxCall() function yourself to make the actual ajax call. The idea however
        is,
        once the ajax call returns
        a status, we hide the process indicator and display the <a
            href="/component/process-indicator">process-complete</a>
        component. The Done button on the process-complete
        component closes the modal when clicked on (<code
            class="inline text-red-500">button_action="hideModal('form-mode-ajax')"</code>).
    </p>
    <p>
        This example used only one process-complete component. Normally you will have two process-complete components.
        One
        to show if the process failed and the other to show if the process succeeded.
    </p>

    <h3>Option 3. Probably the easiest option</h3>
    <p>
        The third and final option is to hide the Okay button of the modal and let the submit button sit in the form
        itself.
        The modal will only have a cancel button to close the form if needed.
    </p>
    <p>
        <x-button onclick="showModal('form-mode-simple')">Edit Profile Simple</x-button>
    </p>
    <x-modal backdrop_can_close="false" name="form-mode-simple" >
        <form method="get" action="" class="profile-form-simple" onsubmit="return saveProfileSimple()">
            @csrf
            <b>Edit Your Profile</b>
            <div class="grid grid-cols-2 gap-4 mt-6">
                <x-input required="true" name="first_name3" label="First name"
                    error_message="Please enter your first name" />
                <x-input required="true" name="last_name3" label="Last name"
                    error_message="Please enter your last name" />
            </div>
            <x-input required="true" name="email3" label="Email address" error_message="Please enter your email" />
            <x-input numeric="true" name="mobile3" label="Mobile" />
            <x-button can_submit="true" class="w-full mt-2">Update Profile</x-button>
        </form>
    </x-modal>
    <script>
        saveProfileSimple = () => {
            if (validateForm('.profile-form-simple')) {
                return domEl('.profile-form-simple').submit();
            }
            return false;
        }
    </script>

    <pre class="line-numbers language-markup" data-line="5,9">
        <code>
        // the modal and its form.
        &lt;x-modal
            backdrop_can_close="false"
            name="form-mode-simple"
            &gt;

            &lt;form method="get" action="" class="profile-form-simple"
                  onsubmit="return saveProfileSimple()"&gt;
                @@csrf
                &lt;b&gt;Edit Your Profile&lt;/b&gt;
                &lt;div class="grid grid-cols-2 gap-4 mt-6"&gt;
                    &lt;x-input required="true" name="first_name3"
                        label="First name" error_message="Please enter your first name" /&gt;
                    &lt;x-input required="true" name="last_name3"
                        label="Last name" error_message="Please enter your last name" /&gt;
                &lt;/div&gt;
                &lt;x-input required="true" name="email3"
                        label="Email address" error_message="Please enter your email" /&gt;
                &lt;x-input numeric="true" name="mobile3"
                        label="Mobile" /&gt;
                &lt;x-button can_submit="true" class="w-full mt-2"&gt;
                    Update Profile
                &lt;/x-button&gt;
            &lt;/form&gt;
        &lt;/x-modal&gt;
        </code>
    </pre>
    <pre class="line-numbers language-js" data-line="4">
        <code>
        // the script called by the Update button
        saveProfileSimple = () => {
            if(validateForm('.profile-form-simple')){
                return domEl('.profile-form-simple').submit();
            }
            return false;
        }
        </code>
    </pre>

 

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Modal component.</p>

    <x-table-responsive>
        <x-table.thead>
            <x-table.th>Option</x-table.th>
            <x-table.th>Default</x-table.th>
            <x-table.th>Available Values</x-table.th>
        </x-table.thead>
        <x-table.tbody>

            <tr>
                <td>type</td>
                <td><em>blank</em></td>
                <td><code class="inline">info</code> <code class="inline">error</code> <code
                        class="inline">warning</code>
                    <code class="inline">success</code>
                </td>
            </tr>
            <tr>
                <td>title</td>
                <td><em>blank</em></td>
                <td>String. Defines the title of the modal.</td>
            </tr>
            <tr>
                <td>name</td>
                <td>'bw-modal-'.uniqid()</td>
                <td>Uniquely identifies a modal. This attribute is very important if you want to prevent erratic
                    behaviour
                    of
                    modals.</td>
            </tr>
         
            <tr>
                <td>close_after_action</td>
                <td>true</td>
                <td>Specify whether the modal stays open after any of the action buttons are clicked.<br> <code
                        class="inline">true</code> <code class="inline">false</code> </td>
            </tr>
            <tr>
                <td>backdrop_can_close</td>
                <td>true</td>
                <td>Specify whether clicking on the modal backdrop should close the modal.<br> <code
                        class="inline">true</code>
                    <code class="inline">false</code>
                </td>
            </tr>
            <tr>
                <td>blur_backdrop</td>
                <td>true</td>
                <td>Specify whether the backdrop of the modal should be blurred.<br> <code class="inline">true</code>
                    <code class="inline">false</code> </td>
            </tr>
          
            <tr>
                <td>size</td>
                <td>big</td>
                <td>Defines the size of the modal. Arranged from smallest to largest. <br> <code
                        class="inline">tiny</code>
                    <code class="inline">small</code> <code class="inline">medium</code>
                    <code class="inline">big</code> <code class="inline">large</code> <code class="inline">xl</code>
                    <code class="inline">omg</code>
                </td>
            </tr>
            <tr>
                <td>close_icon</td>
                <td>false</td>
                <td>Display a close icon in the top right corner of the modal window. Clicking on this will close the
                    modal
                    or
                    behave the same as the Cancel button if it exists in the modal footer.
                    <br><br><code class="inline">true</code> <code class="inline">false</code>
                </td>
            </tr>


        </x-table.tbody>
    </x-table-responsive>

    <h3>Modal with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-modal
                type="warning"
                title="Modal with all features"
                name="full-modal"
                cancel_button_label="no"
                close_after_action="false"
                backdrop_can_close="false"
                close_icon="true"
                blur_backdrop="false"
                size="medium"
                class="shadow-sm"&gt;
                ...
            &lt;/x-modal&gt;
        </code>
    </pre>

    <x-alert closeIcon="false">
        The source file for this component is available in <code class="inline">resources > views > components >
            bladewind
            > modal.blade.php</code> and
        <code class="inline">resources > views > components > bladewind > modal-icons.blade.php</code>
    </x-alert>

    <x-slot:side_nav>
        <div class="flex items-center">
            <div class="dot"></div><a href="#default">Default modal</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#types">Different types</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#sizes">Different sizes</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#actions">Action buttons</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#cant-dismiss">Non-dismissible modal</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#forms">Form submissions</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#attributes">Full list of attributes</a>
        </div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-modal');
        </script>
    </x-slot>
</div>
