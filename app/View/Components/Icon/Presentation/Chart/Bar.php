<?php

namespace Modules\DvUi\View\Components\Icon\Presentation\Chart;

use Illuminate\View\Component;
use Illuminate\View\View;

class Bar extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/presentation/chart/bar');
    }
}
