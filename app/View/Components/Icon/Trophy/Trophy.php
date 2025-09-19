<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Trophy;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Trophy extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.trophy.index');
    }
}
