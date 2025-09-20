<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Academic;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

final class Cap extends Icon
{
    public function render(): View
    {
        return view('dvui::components.icon/academic/cap');
    }
}
