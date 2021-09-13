<?php

namespace App\Http\Livewire\Nilai;

use Livewire\Component;
use App\Models\NilaiSemEmpat;

class Sem4 extends Component
{
    public $user;

    protected $rules = [
        'user.user_id' => 'required',
        'user.akpem' => 'required|numeric|min:1|max:4',
        'user.bmn2' => 'required|numeric|min:1|max:4',
        'user.pap2' => 'required|numeric|min:1|max:4',
        'user.knd' => 'required|numeric|min:1|max:4',
        'user.knl' => 'required|numeric|min:1|max:4',
        'user.simkn' => 'required|numeric|min:1|max:4',
        'user.makro' => 'required|numeric|min:1|max:4',
        'user.ptun' => 'required|numeric|min:1|max:4',
    ];

    public function update(){
        $this->validate();

        bcscale(100);
        $akpem = bcmul($this->user->akpem, 3);
        $bmn2 = bcmul($this->user->bmn2, 3);
        $pap2 = bcmul($this->user->pap2, 3);
        $knd = bcmul($this->user->knd, 3);
        $knl = bcmul($this->user->knl, 3);
        $simkn = bcmul($this->user->simkn, 3);
        $makro = bcmul($this->user->makro, 3);
        $ptun = bcmul($this->user->ptun, 2);

        $sks = 23;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd(bcadd(bcadd($akpem, $bmn2),$pap2),$knd),$knl), $simkn),$makro),$ptun);
        $this->user->ip = bcdiv($jumlah_nilai, $sks);
        $this->user->save();
        $this->emit('alert', ['success', 'Perubahan data telah tersimpan']);
        return redirect(route('dashboard'));
    }
    public function mount(){
        if(!$this->user = NilaiSemEmpat::where('user_id', session('user')->id)->first()){
            $this->user = new NilaiSemEmpat();
            $this->user->user_id = session('user')->id;
        };
    }
    public function render()
    {
        return view('livewire.nilai.sem4');
    }
}
