<?php

namespace Modules\DvUi\View\Components\Icon\Signal;

use Illuminate\View\Component;
use Illuminate\View\View;

class Signal extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.signal.index');
    }
}
