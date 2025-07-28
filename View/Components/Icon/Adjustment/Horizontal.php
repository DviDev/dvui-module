<?php

namespace Modules\DvUi\View\Components\Icon\Adjustment;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

class Horizontal extends Icon
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render(): View
    {
        return view('dvui::components.icon/adjustment/horizontal');
    }
}
