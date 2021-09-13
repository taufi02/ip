<?php

namespace App\Http\Livewire\Nilai;

use App\Models\NilaiSemSatu;
use Livewire\Component;
use App\Models\User;

class Sem1 extends Component
{
    public $user;

    protected $rules = [
        'user.user_id' => 'required',
        'user.agama' => 'required|numeric|min:1|max:4',
        'user.kwn' => 'required|numeric|min:1|max:4',
        'user.pih' => 'required|numeric|min:1|max:4',
        'user.pie' => 'required|numeric|min:1|max:4',
        'user.bi' => 'required|numeric|min:1|max:4',
        'user.stat' => 'required|numeric|min:1|max:4',
        'user.pengakun1' => 'required|numeric|min:1|max:4',
        'user.manajemen' => 'required|numeric|min:1|max:4',
    ];

    public function update(){
        $this->validate();

        bcscale(100);
        $agama = bcmul($this->user->agama, 2);
        $kwn = bcmul($this->user->kwn, 2);
        $pih = bcmul($this->user->pih, 2);
        $pie = bcmul($this->user->pie, 3);
        $bi = bcmul($this->user->bi, 2);
        $stat = bcmul($this->user->stat, 2);
        $pengakun1 = bcmul($this->user->pengakun1, 3);
        $manajemen = bcmul($this->user->manajemen, 3);

        $sks = 19;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd(bcadd(bcadd($agama, $kwn),$pih),$pie),$bi), $stat),$pengakun1),$manajemen);
        $this->user->ip = bcdiv($jumlah_nilai, $sks);
        $this->user->save();
        $this->emit('alert', ['success', 'Perubahan data telah tersimpan']);
        return redirect(route('dashboard'));
    }
    public function mount(){
        if(!$this->user = NilaiSemSatu::where('user_id', session('user')->id)->first()){
            $this->user = new NilaiSemSatu();
            $this->user->user_id = session('user')->id;
        };
    }

    public function render()
    {
        return view('livewire.nilai.sem1');
    }
}
