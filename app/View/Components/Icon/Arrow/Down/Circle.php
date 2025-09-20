<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Arrow\Down;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

final class Circle extends Icon
{
    public function render(): View
    {
        return view('dvui::components.icon/arrow/down/circle');
    }
}
