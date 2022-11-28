<?php

namespace Modules\DvUi\View\Components\Icon\Arrow\Up;

use Illuminate\View\Component;

class Tray extends Component
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
        return view('dvui::components.icon/arrow/up/tray');
    }
}
