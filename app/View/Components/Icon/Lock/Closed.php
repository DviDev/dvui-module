<?php

namespace Modules\DvUi\View\Components\Icon\Lock;

use Illuminate\View\Component;
use Illuminate\View\View;

class Closed extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/lock/closed');
    }
}
