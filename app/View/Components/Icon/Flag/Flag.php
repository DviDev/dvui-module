<?php

namespace Modules\DvUi\View\Components\Icon\Flag;

use Illuminate\View\Component;
use Illuminate\View\View;

class Flag extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.flag.index');
    }
}
