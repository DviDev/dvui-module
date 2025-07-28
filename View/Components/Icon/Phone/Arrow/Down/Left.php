<?php

namespace Modules\DvUi\View\Components\Icon\Phone\Arrow\Down;

use Illuminate\View\Component;
use Illuminate\View\View;

class Left extends Component
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
    public function render(): View
    {
        return view('dvui::components.icon.phone.arrow.down.left');
    }
}
