<?php

namespace Modules\DvUi\View\Components\Icon\Wrench;

use Illuminate\View\Component;
use Illuminate\View\View;

class Wrench extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.wrench.index');
    }
}
