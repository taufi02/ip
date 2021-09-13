<?php

namespace App\Http\Livewire\Nilai;

use Livewire\Component;
use App\Models\NilaiSemLima;

class Sem5 extends Component
{
    public $user;

    protected $rules = [
        'user.user_id' => 'required',
        'user.pap3' => 'required|numeric|min:1|max:4',
        'user.pu1' => 'required|numeric|min:1|max:4',
        'user.keupub' => 'required|numeric|min:1|max:4',
        'user.pbj' => 'required|numeric|min:1|max:4',
        'user.aplbmn' => 'required|numeric|min:1|max:4',
        'user.simkn2' => 'required|numeric|min:1|max:4',
    ];

    public function update(){
        $this->validate();

        bcscale(100);
        $pap3 = bcmul($this->user->pap3, 3);
        $pu1 = bcmul($this->user->pu1, 3);
        $keupub = bcmul($this->user->keupub, 3);
        $pbj = bcmul($this->user->pbj, 3);
        $aplbmn = bcmul($this->user->aplbmn, 3);
        $simkn2 = bcmul($this->user->simkn2, 3);

        $sks = 18;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd($pap3, $pu1),$keupub),$pbj),$aplbmn), $simkn2);
        $this->user->ip = bcdiv($jumlah_nilai, $sks);
        $this->user->save();
        $this->emit('alert', ['success', 'Perubahan data telah tersimpan']);
        return redirect(route('dashboard'));
    }
    public function mount(){
        if(!$this->user = NilaiSemLima::where('user_id', session('user')->id)->first()){
            $this->user = new NilaiSemLima();
            $this->user->user_id = session('user')->id;
        };
    }
    public function render()
    {
        return view('livewire.nilai.sem5');
    }
}
