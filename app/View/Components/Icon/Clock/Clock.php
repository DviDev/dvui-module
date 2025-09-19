<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Clock;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Clock extends Component
{
    public function render(): View|string
    {
        return view('dvui::components.icon.clock.index');
    }
}
