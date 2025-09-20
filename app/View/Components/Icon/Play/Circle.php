<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Play;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Circle extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/play/circle');
    }
}
