<?php

namespace Modules\DvUi\View\Components\Icon\Heart;

use Illuminate\View\Component;
use Illuminate\View\View;

class Heart extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.heart.index');
    }
}
