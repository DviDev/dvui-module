<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Forward;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Forward extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.forward.index');
    }
}
