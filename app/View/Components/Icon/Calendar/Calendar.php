<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Calendar;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Calendar extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.calendar.index');
    }
}
