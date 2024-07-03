<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class Counter extends Component
{
    use LivewireAlert;

    public $name = '';

    public $chingados = "funciona por plis";
    #[On('post-created')]
    public function updatePostList($title, $name)
    {
        $this->chingados = $title;
        $this->name = $name;
    }
    public function save()
    {
        $this->alert('success', 'Success is approaching!');
        // dd($this->name);
    }

    // public function updatedChingados($value)
    // {
    //     $this->dispatch('contentChanged', ['value' => $value]);
    // }

    public function render()
    {
        return view('livewire.counter');
    }
}
