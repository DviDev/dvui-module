<?php

namespace Modules\DvUi\View\Components\Icon\Phone;

use Illuminate\View\Component;
use Illuminate\View\View;

class Phone extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.phone.index');
    }
}
