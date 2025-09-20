<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Map;

use Illuminate\View\Component;
use Illuminate\View\View;

final class In extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/map/in');
    }
}
