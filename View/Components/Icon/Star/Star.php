<?php

namespace Modules\DvUi\View\Components\Icon\Star;

use Illuminate\View\Component;
use Illuminate\View\View;

class Star extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.star.index');
    }
}
