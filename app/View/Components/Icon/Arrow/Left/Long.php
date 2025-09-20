<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Arrow\Left;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Long extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/arrow/left/long');
    }
}
