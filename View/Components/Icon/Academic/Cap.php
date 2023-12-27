<?php

namespace Modules\DvUi\View\Components\Icon\Academic;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

class Cap extends Icon
{
    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('dvui::components.icon/academic/cap');
    }
}
