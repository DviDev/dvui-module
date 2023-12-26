<?php

namespace Modules\DvUi\View\Components\Icon\Adjustment;

use Modules\DvUi\View\Components\Icon\Icon;

class Vertical extends Icon
{

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.icon/adjustment/vertical');
    }
}
