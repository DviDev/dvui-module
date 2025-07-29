<?php

namespace Modules\DvUi\View\Components\Icon\Currency;

use Illuminate\View\Component;
use Illuminate\View\View;

class Euro extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/currency/euro');
    }
}
