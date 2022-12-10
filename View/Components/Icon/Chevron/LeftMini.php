<?php

namespace Modules\DvUi\View\Components\Icon\Chevron;

use Illuminate\View\Component;

class LeftMini extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
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
        return view('dvui::components.icon/chevron/leftmini');
    }
}
