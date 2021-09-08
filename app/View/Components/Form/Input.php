<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    public $nama, $label, $edit;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nama, $label, $edit = null)
    {
        $this->nama = $nama;
        $this->label = $label;
        $this->edit = $edit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
