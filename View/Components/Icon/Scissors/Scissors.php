<?php

namespace Modules\DvUi\View\Components\Icon\Scissors;

use Illuminate\View\Component;
use Illuminate\View\View;

class Scissors extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.scissors.index');
    }
}
