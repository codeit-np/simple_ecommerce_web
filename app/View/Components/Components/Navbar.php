<?php

namespace App\View\Components\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    protected $totalItems;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $totalItems = $this->totalItems;
        return view('components.components.navbar',compact('totalItems'));
    }
}
