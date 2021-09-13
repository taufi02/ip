<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UbahTema extends Component
{
    public $tema = 'light';

    public function render()
    {
        return view('livewire.ubah-tema');
    }
}
