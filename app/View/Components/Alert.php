<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
     public $class;
     public $pesan = '';
     public $tipe = '';

    public function __construct($class, $pesan)
    {
        $this->class = $class;
        if($pesan != ''){
            $this->pesan = $pesan['isi'];
            $this->tipe = $pesan['tipe'];
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
