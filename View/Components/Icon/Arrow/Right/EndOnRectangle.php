<?php

namespace Modules\DvUi\View\Components\Icon\Arrow\Right;

use Illuminate\View\Component;
use Illuminate\View\View;

class EndOnRectangle extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('dvui::components.icon.arrow.right.endonrectangle');
    }
}
