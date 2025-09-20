<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Swatch;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Swatch extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.swatch.index');
    }
}
