<div>
    <div wire:ignore>
        <div class="main-container">
            <div class="editor-container editor-container_document-editor" id="editor-container">
                <div class="editor-container__menu-bar" id="editor-menu-bar"></div>
                <div class="editor-container__toolbar" id="editor-toolbar"></div>
                <div class="editor-container__editor-wrapper">
                    <div class="editor-container__editor tailwind-reset">
                            <div id="editor"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite(['resources/js/ckeditor.js'])
</div>
