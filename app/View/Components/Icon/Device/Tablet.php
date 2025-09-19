<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Device;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Tablet extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/device/tablet');
    }
}
