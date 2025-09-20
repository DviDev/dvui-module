<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Retangle;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Stack extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/retangle/stack');
    }
}
