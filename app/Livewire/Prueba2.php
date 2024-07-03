<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class Prueba2 extends Component
{

    use LivewireAlert;

    #[On('documentReady')]
    public function updatePostList()
    {
        // dd('llstio');
        $this->alert('success', 'listo!');
    }

    public function render()
    {
        return view('livewire.prueba2');
    }
}
