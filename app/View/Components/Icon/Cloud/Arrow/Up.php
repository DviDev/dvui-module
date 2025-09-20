<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Cloud\Arrow;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Up extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/cloud/arrow/up');
    }
}
