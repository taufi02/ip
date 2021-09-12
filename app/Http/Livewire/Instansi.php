<?php

namespace App\Http\Livewire;

use App\Models\Aktif;
use App\Models\Instansi as ModelsInstansi;
use Livewire\Component;

class Instansi extends Component
{


    public $instansis;
    public $instansi ;
    public $update;

    protected $rules = [
        'instansi' => 'required',
        'update.is_active' => 'required'
    ];

    public function mount(){
        $this->instansis = ModelsInstansi::all();
        $this->update = Aktif::where('nama','update pilihan')->first();
    }

    public function create(){
        $this->validate();
        ModelsInstansi::create([
            'nama' =>$this->instansi,
        ]);
        $this->mount();
    }
    public function update(){
        $this->update->save();
    }

    public function render()
    {
        return view('livewire.instansi')
        ;

    }
}
