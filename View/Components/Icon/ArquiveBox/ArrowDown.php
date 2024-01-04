<?php

namespace Modules\DvUi\View\Components\Icon\ArquiveBox;

use Modules\DvUi\View\Components\Icon\Icon;

class ArrowDown extends Icon
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.icon/arquivebox/arrowdown');
    }
}
