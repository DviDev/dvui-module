<?php

namespace Modules\DvUi\View\Components\Icon\Light;

use Illuminate\View\Component;
use Illuminate\View\View;

class Bulb extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/light/bulb');
    }
}
