<?php

namespace Modules\DvUi\View\Components\Icon\Musical;

use Illuminate\View\Component;
use Illuminate\View\View;

class Note extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/musical/note');
    }
}
