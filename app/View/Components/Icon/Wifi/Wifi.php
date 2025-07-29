<?php

namespace Modules\DvUi\View\Components\Icon\Wifi;

use Illuminate\View\Component;
use Illuminate\View\View;

class Wifi extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.wifi.index');
    }
}
