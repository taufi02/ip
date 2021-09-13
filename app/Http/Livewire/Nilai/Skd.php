<?php

namespace App\Http\Livewire\Nilai;

use Livewire\Component;
use App\Models\skd as ModelSkd;

class Skd extends Component
{
    public $user;

    protected $rules = [
        'user.user_id' => 'required',
        'user.twk' => 'required|numeric|max:150',
        'user.tiu' => 'required|numeric|max:175',
        'user.tkp' => 'required|numeric|max:225',
    ];

    public function update(){
        $this->validate();

        bcscale(100);
        $this->user->skd = bcadd(bcadd($this->user->twk, $this->user->tiu),$this->user->tkp);
        $this->user->save();
        $this->emit('alert', ['success', 'Perubahan data telah tersimpan']);
        return redirect(route('dashboard'));
    }
    public function mount(){
        if(!$this->user = ModelSkd::where('user_id', session('user')->id)->first()){
            $this->user = new ModelSkd();
            $this->user->user_id = session('user')->id;
        };
    }
    public function render()
    {
        return view('livewire.nilai.skd');
    }
}
