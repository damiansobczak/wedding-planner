<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Header extends Component
{
    public $title;
    public $first;
    public $firstName;
    public $second;
    public $secondName;

    /**
     * Create component instance
     *
     * @return void
     */
    public function __construct($title, $first = null, $firstName = null, $second = null, $secondName = null)
    {
        $this->title = $title;
        $this->first = $first;
        $this->firstName = $firstName;
        $this->second = $second;
        $this->secondName = $secondName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.header');
    }
}
