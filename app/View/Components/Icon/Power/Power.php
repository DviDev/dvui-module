<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Power;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Power extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.power.index');
    }
}
