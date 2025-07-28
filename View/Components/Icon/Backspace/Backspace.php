<?php

namespace Modules\DvUi\View\Components\Icon\Backspace;

use Illuminate\View\Component;
use Illuminate\View\View;

class Backspace extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.backspace.index');
    }
}
