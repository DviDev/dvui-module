<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Chevron\Double;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Down extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.chevron.down.double');
    }
}
