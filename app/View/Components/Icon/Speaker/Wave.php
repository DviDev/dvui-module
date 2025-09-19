<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Speaker;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Wave extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/speaker/wave');
    }
}
