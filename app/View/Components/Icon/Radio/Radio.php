<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Radio;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Radio extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.radio.index');
    }
}
