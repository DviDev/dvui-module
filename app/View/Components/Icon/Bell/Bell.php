<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Bell;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Bell extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.bell.index');
    }
}
