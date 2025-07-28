<?php

namespace Modules\DvUi\View\Components\Icon\Calendar;

use Illuminate\View\Component;
use Illuminate\View\View;

class Calendar extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.calendar.index');
    }
}
