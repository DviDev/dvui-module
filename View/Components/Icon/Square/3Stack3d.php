<?php

namespace Modules\DvUi\View\Components\Icon\Square;

use Illuminate\View\Component;

class 3Stack3d extends Component
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
        return view('dvui::components.icon/square/3stack3d');
    }
}
