<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Semester extends Component
{

    public $nilai, $rata, $rank, $no, $route, $route_arg, $partisipan, $progress,  $partisipanKelas;
    public function __construct( $nilai, $rata, $rank, $no, $route, $partisipan,  $partisipanKelas)
    {
        $this->nilai = $nilai;
        $this->rata = $rata;
        $this->rank = $rank;
        $this->no = $no;
        $this->route = $route;
        $this->route_arg = str_replace("-","_",$route);
        $this->partisipan = $partisipan;
        $this->partisipanKelas = $partisipanKelas;
        $this->progress = ($partisipan/121)*100;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.semester');
    }
}
