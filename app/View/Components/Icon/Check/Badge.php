<?php

namespace Modules\DvUi\View\Components\Icon\Check;

use Illuminate\View\Component;
use Illuminate\View\View;

class Badge extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/check/badge');
    }
}
