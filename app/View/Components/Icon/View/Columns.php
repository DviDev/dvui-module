<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\View;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Columns extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/view/columns');
    }
}
