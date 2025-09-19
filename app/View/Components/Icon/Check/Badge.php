<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Check;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Badge extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/check/badge');
    }
}
