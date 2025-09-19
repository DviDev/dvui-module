<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Qrcode;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Qrcode extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.qrcode.index');
    }
}
