<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Phone;

use Illuminate\View\Component;
use Illuminate\View\View;

final class XMark extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/phone/xmark');
    }
}
