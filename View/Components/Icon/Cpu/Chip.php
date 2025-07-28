<?php

namespace Modules\DvUi\View\Components\Icon\Cpu;

use Illuminate\View\Component;
use Illuminate\View\View;

class Chip extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/cpu/chip');
    }
}
