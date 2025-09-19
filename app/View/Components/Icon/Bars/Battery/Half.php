<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Bars\Battery;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Half extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/bars/battery/half');
    }
}
