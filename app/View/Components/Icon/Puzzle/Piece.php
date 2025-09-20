<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Puzzle;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Piece extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/puzzle/piece');
    }
}
