<?php

namespace Modules\DvUi\View\Components\Icon\ArquiveBox;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

class ArrowDown extends Icon
{
    public function render(): View
    {
        return view('dvui::components.icon/arquivebox/arrowdown');
    }
}
