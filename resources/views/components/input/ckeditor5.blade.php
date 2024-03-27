@props(['value'])

<div class="rounded-md shadow-sm" wire:ignore>
    <textarea class="prose max-w-full form-textarea block transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
    wire:model.lazy="{{ $value }}">
    </textarea>
</div>

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('textarea'))
            // .then(editor => {
            //     editor.model.document.on('change:data', () => {
            //         @this.set('description', editor.getData());
            //     })

            //     Livewire.on('reinit', () => {
            //         editor.setData('', '')
            //     })
            // })
            .then(editor => {
            document.querySelector("#submit").addEventListener("click", () => {
                const textareaValue = $("#description").data("description");
                eval(textareaValue).set("description", editor.getData());
                // @this.set('message', editor.getData());
            });
            })      
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
