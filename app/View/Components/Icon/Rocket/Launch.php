<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Rocket;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Launch extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/rocket/launch');
    }
}
