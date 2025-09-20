<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Wifi;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Wifi extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.wifi.index');
    }
}
