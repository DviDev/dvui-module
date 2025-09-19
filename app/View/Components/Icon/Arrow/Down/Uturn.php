<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Arrow\Down;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Uturn extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/arrow/down/uturn');
    }
}
