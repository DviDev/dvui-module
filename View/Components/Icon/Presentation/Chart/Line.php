<?php

namespace Modules\DvUi\View\Components\Icon\Presentation\Chart;

use Illuminate\View\Component;
use Illuminate\View\View;

class Line extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/presentation/chart/line');
    }
}
