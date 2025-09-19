<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Wrench;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Screwdriver extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/wrench/screwdriver');
    }
}
