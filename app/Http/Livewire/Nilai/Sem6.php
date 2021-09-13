<?php

namespace App\Http\Livewire\Nilai;

use Livewire\Component;
use App\Models\NilaiSemEnam;

class Sem6 extends Component
{
    public $user;

    protected $rules = [
        'user.user_id' => 'required',
        'user.pu2' => 'required|numeric|min:1|max:4',
        'user.manris' => 'required|numeric|min:1|max:4',
        'user.etikor' => 'required|numeric|min:1|max:4',
        'user.bnpk' => 'required|numeric|min:1|max:4',
        'user.ktta' => 'required|numeric|min:1|max:4',
        'user.pkl' => 'required|numeric|min:1|max:4',
    ];

    public function update(){
        $this->validate();

        bcscale(100);
        $pu2 = bcmul($this->user->pu2, 3);
        $manris = bcmul($this->user->manris, 2);
        $etikor = bcmul($this->user->etikor, 3);
        $bnpk = bcmul($this->user->bnpk, 3);
        $ktta = bcmul($this->user->ktta, 2);
        $pkl = bcmul($this->user->pkl, 3);

        $sks = 16;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd($pu2, $manris),$etikor),$bnpk),$ktta), $pkl);
        $this->user->ip = bcdiv($jumlah_nilai, $sks);
        $this->user->save();
        $this->emit('alert', ['success', 'Perubahan data telah tersimpan']);
        return redirect(route('dashboard'));
    }
    public function mount(){
        if(!$this->user = NilaiSemEnam::where('user_id', session('user')->id)->first()){
            $this->user = new NilaiSemEnam();
            $this->user->user_id = session('user')->id;
        };
    }
    public function render()
    {
        return view('livewire.nilai.sem6');
    }
}
