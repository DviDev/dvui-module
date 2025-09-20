<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Arrow\Left;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Small extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/arrow/left/small');
    }
}
