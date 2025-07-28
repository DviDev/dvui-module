<?php

namespace Modules\DvUi\View\Components\Icon\Command;

use Illuminate\View\Component;
use Illuminate\View\View;

class Line extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/command/line');
    }
}
