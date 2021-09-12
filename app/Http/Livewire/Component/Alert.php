<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class Alert extends Component
{
    public $isi;
    public $class_lama;
    public $class_baru;
    public $class_fix;

    protected $listeners = ['alert'];

    public function alert($pesan){
        $this->tipe = $pesan[0];
        $this->isi = $pesan[1];
        $this->class_baru = ' text-'.$pesan[0].' bg-'.$pesan[0];
        $this->mount($this->class_lama);
    }

    public function mount($class){
        $this->class_lama = $class;
        $this->class_fix = $this->class_lama . ' ' . $this->class_baru;
    }

    public function close(){
        $this->isi = '';
    }

    public function render()
    {
        return view('livewire.component.alert');
    }
}
