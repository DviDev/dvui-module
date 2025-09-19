<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Magnifying;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Glass extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.magnifying.index');
    }
}
