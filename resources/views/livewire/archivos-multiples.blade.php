<div>
    <form wire:submit="save">
        <input type="file" wire:model="photos" multiple>

        @error('photos.*')
            <span class="error">{{ $message }}</span>
        @enderror

        <button type="submit">Save photo</button>
    </form>
    {{-- <br><br><br>
    <div>
        @foreach ($photos as $valor => $photo)
            @if (strtolower($photo->getClientOriginalExtension()) === 'pdf')
                <h3>
                    <a
                        onclick="openPdfInNewTab('{{ $photo->temporaryUrl() }}', '{{ $photo->getClientOriginalName() }}'); return false;">
                        Ver PDF {{ $valor + 1 }}: {{ $photo->getClientOriginalName() }}
                    </a>
                </h3>
            @else
                <img src="{{ $photo->temporaryUrl() }}" alt="" class="border-2 rounded">
                <span>Foto {{ $valor + 1 }}</span>
            @endif
            <br>
        @endforeach
    </div>

    <script>
        async function openPdfInNewTab(url, filename) {
            try {
                const blob = await (await fetch(url)).blob();
                const blobUrl = URL.createObjectURL(blob);
                const newWindow = window.open(blobUrl, '_blank');
                if (newWindow) {
                    newWindow.document.title = filename;
                    // Liberamos el objeto URL después de que la ventana se haya cargado
                    newWindow.onload = () => {
                        URL.revokeObjectURL(blobUrl);
                    };
                } else {
                    alert('Permite las ventanas emergentes para este sitio.');
                    // Si la ventana no se abre, liberamos el objeto URL inmediatamente
                    URL.revokeObjectURL(blobUrl);
                }
            } catch (e) {
                // console.error(e);
                alert('Error al abrir el PDF. Intenta de nuevo.');
            }
        }
    </script> --}}
</div>
