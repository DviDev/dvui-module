<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Chevron;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Up extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.chevron.up.index');
    }
}
