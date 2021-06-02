<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class RadioBtn extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $options;
    public $id;
    public $label;
    public function __construct($name, $options,$id, $label)
    {
        //
        $this->name=$name;
        $this->options=$options;
        $this->id=$id;
        $this->label=$label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.radio-btn');
    }
}
