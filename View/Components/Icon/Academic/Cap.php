<?php

namespace Modules\DvUi\View\Components\Icon\Academic;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

class Cap extends Icon
{
    public function render(): View
    {
        return view('dvui::components.icon/academic/cap');
    }
}
