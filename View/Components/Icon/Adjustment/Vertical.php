<?php

namespace Modules\DvUi\View\Components\Icon\Adjustment;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

class Vertical extends Icon
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('dvui::components.icon/adjustment/vertical');
    }
}
