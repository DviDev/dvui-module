<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Heart;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Heart extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.heart.index');
    }
}
