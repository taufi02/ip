<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    public $field, $label, $sks;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field, $label, $sks)
    {
        $this->field = $field;
        $this->label = $label;
        $this->sks = $sks;
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
