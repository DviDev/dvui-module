<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Light;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Bulb extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/light/bulb');
    }
}
