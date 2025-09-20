<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Eye;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Dropper extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/eye/dropper');
    }
}
