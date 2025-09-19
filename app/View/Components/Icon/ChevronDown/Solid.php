<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\ChevronDown;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Solid extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.chevron_down.solid');
    }
}
