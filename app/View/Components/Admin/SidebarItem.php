<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class SidebarItem extends Component
{
    public $route;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $name)
    {
        $this->route = $route;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.sidebar-item');
    }
}
