<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Arrow\Right;

use Illuminate\View\Component;
use Illuminate\View\View;

final class EndOnRectangle extends Component
{
    public function render(): View|string
    {
        return view('dvui::components.icon.arrow.right.endonrectangle');
    }
}
