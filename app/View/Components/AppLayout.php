<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $header;
    public $title;
    public $footer;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($header = null, $title = null, $footer = null)
    {
        $this->header = $header;
        $this->title = $title;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app');
    }
}