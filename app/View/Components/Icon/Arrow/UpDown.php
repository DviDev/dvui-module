<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Arrow;

use Illuminate\View\Component;
use Illuminate\View\View;

final class UpDown extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/arrow/updown');
    }
}
