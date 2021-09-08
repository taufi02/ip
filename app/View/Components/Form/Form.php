<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Form extends Component
{
    public $route, $judul, $user, $tipe;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $judul, $user = null, $tipe)
    {
        $this->route = $route;
        $this->judul = $judul;
        $this->tipe = $tipe;
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.form');
    }
}
