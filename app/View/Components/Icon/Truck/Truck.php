<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Truck;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Truck extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.truck.index');
    }
}
