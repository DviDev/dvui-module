<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\X;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Mark extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/x/mark');
    }
}
