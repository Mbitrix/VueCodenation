<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $options;
    public $label;

    public function __construct($name, $options, $label)
    {
        //
        $this->name=$name;
        $this->options=$options;
        $this->label=$label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.select');
    }
}
