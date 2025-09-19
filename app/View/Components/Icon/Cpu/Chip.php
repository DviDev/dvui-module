<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Cpu;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Chip extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/cpu/chip');
    }
}
