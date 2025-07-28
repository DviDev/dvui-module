<?php

namespace Modules\DvUi\View\Components\Icon\Document\Chart;

use Illuminate\View\Component;
use Illuminate\View\View;

class Bar extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/document/chart/bar');
    }
}
