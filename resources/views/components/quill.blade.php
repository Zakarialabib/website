@props(['value' => ''])

<div
    wire:ignore
    x-data="{ content: @entangle($attributes->wire('model')).defer }"
    x-on:text-change.debounce.2000ms="content = $event.detail.content"
    x-init="initQuill($refs.editor, $dispatch)"
    class="mt-1"
>
    <div wire:ignore>
        <div x-ref="editor">{!! $value !!}</div>
    </div>
</div>

<script>
    function initQuill(ref, dispatch) {
        const quill = new Quill(ref, {
                theme: 'snow',
                modules: {
                    toolbar: {
                        container: [
                            ['bold', 'italic', 'underline', 'strike'],
                            [{ 'header': 1 }, { 'header': 2 }],
                            ['link', 'blockquote', 'code-block', 'image', 'video'],
                            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                            [{ 'direction': 'rtl' }],

                            [{ 'size': ['small', false, 'large', 'huge'] }],
                            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                            [{ 'color': [] }, { 'background': [] }],
                            [{ 'font': [] }],
                            [{ 'align': [] }],
                            ['clean']
                        ]
                    }
                }, 
                bounds: ref,
                placeholder: '{{ $placeholder ?? 'Write something great!' }}'
            });
            quill.on('text-change', function () {
                dispatch('text-change', { content: quill.root.innerHTML })
            });
        }
</script>