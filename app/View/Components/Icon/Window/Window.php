<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Window;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Window extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.window.index');
    }
}
