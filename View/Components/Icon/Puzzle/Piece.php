<?php

namespace Modules\DvUi\View\Components\Icon\Puzzle;

use Illuminate\View\Component;
use Illuminate\View\View;

class Piece extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/puzzle/piece');
    }
}
