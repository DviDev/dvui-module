<?php

namespace Modules\DvUi\View\Components\Icon\Pause;

use Illuminate\View\Component;
use Illuminate\View\View;

class Pause extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.pause.index');
    }
}
