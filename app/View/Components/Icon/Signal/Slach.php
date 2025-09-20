<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Signal;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Slach extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/signal/slach');
    }
}
