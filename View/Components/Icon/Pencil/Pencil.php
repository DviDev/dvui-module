<?php

namespace Modules\DvUi\View\Components\Icon\Pencil;

use Illuminate\View\Component;
use Illuminate\View\View;

class Pencil extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.pencil.index');
    }
}
