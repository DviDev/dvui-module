<?php

namespace Modules\DvUi\View\Components\Icon\Arrow\Down;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

class Circle extends Icon
{
    public function render(): View
    {
        return view('dvui::components.icon/arrow/down/circle');
    }
}
