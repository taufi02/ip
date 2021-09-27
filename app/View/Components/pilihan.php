<?php

namespace App\View\Components;

use Illuminate\View\Component;

class pilihan extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $judul, $wireModel, $wireClick, $instansis, $pilihanInstansi, $jumlahInstansi, $pilihan, $jumlahPartisipanKelas;

    public function __construct($judul, $wireModel,$wireClick, $instansis, $pilihanInstansi, $jumlahInstansi, $pilihan, $jumlahPartisipanKelas)
    {
        $this->judul = $judul;
        $this->wireModel = $wireModel;
        $this->wireClick = $wireClick;
        $this->instansis = $instansis;
        $this->pilihanInstansi = $pilihanInstansi;
        $this->jumlahInstansi = $jumlahInstansi;
        $this->pilihan = $pilihan;
        $this->jumlahPartisipanKelas = $jumlahPartisipanKelas;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pilihan');
    }
}
