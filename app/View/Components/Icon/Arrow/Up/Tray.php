<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Arrow\Up;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Tray extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/arrow/up/tray');
    }
}
