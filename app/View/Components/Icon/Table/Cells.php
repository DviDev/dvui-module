<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Table;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Cells extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/table/cells');
    }
}
