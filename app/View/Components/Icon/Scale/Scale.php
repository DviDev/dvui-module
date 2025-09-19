<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Scale;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Scale extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.scale.index');
    }
}
