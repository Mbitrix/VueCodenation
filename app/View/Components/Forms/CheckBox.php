<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class CheckBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $value;
    public $name;
    public $label;
    public $id;

    public function __construct($value, $name, $label,$id)
    {
        //
        $this->value=$value;
        $this->name=$name;
        $this->label=$label;
        $this->id=$id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.check-box');
    }
}
