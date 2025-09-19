<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Computer;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Desktop extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/computer/desktop');
    }
}
