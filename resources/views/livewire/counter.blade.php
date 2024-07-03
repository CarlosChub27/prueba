<div>
    <script src="https://cdn.tiny.cloud/1/80t0d3hw0dsgi3adw7dputx6nkhlz90olyeqi3pe4pkn5lg3/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    @script
        <script>
            tinymce.init({
                selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
                plugins: 'code table lists',
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
                init_instance_callback: (editor) => {
                    editor.on('submit', function(e) {
                        e.preventDefault();
                        console.log(editor.getContent());
                        $wire.dispatch('post-created', {
                            title: editor.getContent(),
                            name: 'nameenviado'
                        });
                    });
                }
            });
        </script>
    @endscript

    <h1>Hola</h1>

    <h2>{{ $chingados }}</h2>
    <h2>name: {{$name}}</h2>
    <form>
        <input type="text" wire:model="name">
        <div wire:ignore>
            <textarea id="myeditorinstance">Hello, World!</textarea>
        </div>
        <button type="submit" wire:click="save">Save</button>
    </form>
</div>

{{-- <x-tinymce-editor wire:model="chingados"></x-tinymce-editor> --}}
