<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Chart\Bar;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Bar extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.chart.bar.index');
    }
}
