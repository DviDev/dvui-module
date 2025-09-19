<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Printer;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Printer extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.printer.index');
    }
}
