<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Moon;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Moon extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.moon.index');
    }
}
