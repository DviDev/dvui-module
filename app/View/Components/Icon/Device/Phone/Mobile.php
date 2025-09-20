<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Device\Phone;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Mobile extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/device/phone/mobile');
    }
}
