<?php

namespace Modules\DvUi\View\Components\Icon\Arrow\Left;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

class StartOnRectangle extends Icon
{
    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('dvui::components.icon.arrow.left.start-on-rectangle');
    }
}
