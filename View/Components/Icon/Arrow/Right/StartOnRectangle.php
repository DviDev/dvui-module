<?php

namespace Modules\DvUi\View\Components\Icon\Arrow\Right;

use Illuminate\View\Component;

class StartOnRectangle extends Component
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
        return view('dvui::components.icon.arrow.right.startonrectangle');
    }
}
