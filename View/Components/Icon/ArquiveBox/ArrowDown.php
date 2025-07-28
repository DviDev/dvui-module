<?php

namespace Modules\DvUi\View\Components\Icon\ArquiveBox;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

class ArrowDown extends Icon
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render(): View
    {
        return view('dvui::components.icon/arquivebox/arrowdown');
    }
}
