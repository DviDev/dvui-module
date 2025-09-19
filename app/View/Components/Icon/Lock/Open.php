<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Lock;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Open extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/lock/open');
    }
}
