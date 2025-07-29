<?php

namespace Modules\DvUi\View\Components\Icon\Rocket;

use Illuminate\View\Component;
use Illuminate\View\View;

class Launch extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/rocket/launch');
    }
}
