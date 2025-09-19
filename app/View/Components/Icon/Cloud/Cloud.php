<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Cloud;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Cloud extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.cloud.index');
    }
}
