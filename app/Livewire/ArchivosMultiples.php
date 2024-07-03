<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use phpDocumentor\Reflection\Types\This;

class ArchivosMultiples extends Component
{
    use WithFileUploads;
 
    // #[Validate(['photos.*' => 'image|max:1024'])]
    public $photos = [];
 
    public function save()
    {
        $this->validate([
            'photos.*' => 'required|file|mimes:pdf|max:5120',
        ]);
        dd($this->photos);
        $listo=[];
        $count=0;
        foreach ($this->photos as $photo) {
            $listo[]=$photo->store('photos', 'public');
        }
        // dd($listo);
    }
    
    public function render()
    {
        return view('livewire.archivos-multiples');
    }
}
