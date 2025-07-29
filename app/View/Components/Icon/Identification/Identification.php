<?php

namespace Modules\DvUi\View\Components\Icon\Identification;

use Illuminate\View\Component;
use Illuminate\View\View;

class Identification extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.identification.index');
    }
}
