<?php

namespace Modules\DvUi\View\Components\Icon\Shopping;

use Illuminate\View\Component;
use Illuminate\View\View;

class Bag extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/shopping/bag');
    }
}
