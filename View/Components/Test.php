<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;

class Test extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $name = '')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.test');
    }
}
