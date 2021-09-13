<?php

namespace App\Http\Livewire\Nilai;

use Livewire\Component;
use App\Models\NilaiSemTiga;

class Sem3 extends Component
{
    public $user;

    protected $rules = [
        'user.user_id' => 'required',
        'user.hkn' => 'required|numeric|min:1|max:4',
        'user.akbi' => 'required|numeric|min:1|max:4',
        'user.mankeu' => 'required|numeric|min:1|max:4',
        'user.hukpertanahan' => 'required|numeric|min:1|max:4',
        'user.lelang' => 'required|numeric|min:1|max:4',
        'user.pap1' => 'required|numeric|min:1|max:4',
        'user.bmn1' => 'required|numeric|min:1|max:4',
        'user.hap' => 'required|numeric|min:1|max:4',
    ];

    public function update(){
        $this->validate();

        bcscale(100);
        $hkn = bcmul($this->user->hkn, 3);
        $akbi = bcmul($this->user->akbi, 3);
        $mankeu = bcmul($this->user->mankeu, 3);
        $hukpertanahan = bcmul($this->user->hukpertanahan, 3);
        $lelang = bcmul($this->user->lelang, 3);
        $pap1 = bcmul($this->user->pap1, 3);
        $bmn1 = bcmul($this->user->bmn1, 3);
        $hap = bcmul($this->user->hap, 2);

        $sks = 23;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd(bcadd(bcadd($hkn, $akbi),$mankeu),$hukpertanahan),$lelang), $pap1),$bmn1),$hap);
        $this->user->ip = bcdiv($jumlah_nilai, $sks);
        $this->user->save();
        $this->emit('alert', ['success', 'Perubahan data telah tersimpan']);
        return redirect(route('dashboard'));
    }
    public function mount(){
        if(!$this->user = NilaiSemTiga::where('user_id', session('user')->id)->first()){
            $this->user = new NilaiSemTiga();
            $this->user->user_id = session('user')->id;
        };
    }
    public function render()
    {
        return view('livewire.nilai.sem3');
    }
}
