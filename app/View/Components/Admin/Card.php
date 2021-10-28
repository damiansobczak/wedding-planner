<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Card extends Component
{
    public $counter;
    public $link;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($counter, $link, $label)
    {
        $this->counter = $counter;
        $this->link = $link;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.card');
    }
}
