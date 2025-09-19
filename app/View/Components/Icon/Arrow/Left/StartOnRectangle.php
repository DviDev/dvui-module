<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Arrow\Left;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

final class StartOnRectangle extends Icon
{
    public function render(): View
    {
        return view('dvui::components.icon.arrow.left.start-on-rectangle');
    }
}
