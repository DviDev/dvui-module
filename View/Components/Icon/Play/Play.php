<?php

namespace Modules\DvUi\View\Components\Icon\Play;

use Illuminate\View\Component;
use Illuminate\View\View;

class Play extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.play.index');
    }
}
