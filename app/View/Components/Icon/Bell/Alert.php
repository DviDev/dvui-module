<?php

namespace Modules\DvUi\View\Components\Icon\Bell;

use Illuminate\View\Component;
use Illuminate\View\View;

class Alert extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/bell/alert');
    }
}
