<?php

namespace Modules\DvUi\View\Components\Icon\Banknotes;

use Illuminate\View\Component;
use Illuminate\View\View;

class Banknotes extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.banknotes.index');
    }
}
