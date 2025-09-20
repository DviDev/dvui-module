<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Paint;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Brush extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/paint/brush');
    }
}
