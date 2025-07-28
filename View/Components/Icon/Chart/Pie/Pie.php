<?php

namespace Modules\DvUi\View\Components\Icon\Chart\Pie;

use Illuminate\View\Component;
use Illuminate\View\View;

class Pie extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.chart.pie.index');
    }
}
