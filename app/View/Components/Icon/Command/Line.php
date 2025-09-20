<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Command;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Line extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/command/line');
    }
}
