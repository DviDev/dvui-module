<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Map;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Map extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.map.index');
    }
}
