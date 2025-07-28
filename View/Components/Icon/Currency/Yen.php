<?php

namespace Modules\DvUi\View\Components\Icon\Currency;

use Illuminate\View\Component;
use Illuminate\View\View;

class Yen extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/currency/yen');
    }
}
