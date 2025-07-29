<?php

namespace Modules\DvUi\View\Components\Icon\Qrcode;

use Illuminate\View\Component;
use Illuminate\View\View;

class Qrcode extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.qrcode.index');
    }
}
