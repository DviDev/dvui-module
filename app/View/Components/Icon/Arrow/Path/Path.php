<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Arrow\Path;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Path extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.arrow.path.index');
    }
}
