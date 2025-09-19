<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Shield;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Check extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/shield/check');
    }
}
