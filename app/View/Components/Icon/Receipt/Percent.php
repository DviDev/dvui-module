<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Receipt;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Percent extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/receipt/percent');
    }
}
