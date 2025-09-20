<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Globe\Hand;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Raised extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/globe/hand/raised');
    }
}
