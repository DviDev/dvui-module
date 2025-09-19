<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Square;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Square2x2 extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/square/square2x2');
    }
}
