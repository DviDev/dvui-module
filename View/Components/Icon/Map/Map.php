<?php

namespace Modules\DvUi\View\Components\Icon\Map;

use Illuminate\View\Component;
use Illuminate\View\View;

class Map extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.map.index');
    }
}
