<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Minus;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Solid extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.minus.index');
    }
}
