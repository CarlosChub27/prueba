<div>
    @php($id = $attributes->wire('model')->value)
    <textarea id="myeditorinstance" wire:model="{{ $id }}">Hello, World!</textarea>
</div>
