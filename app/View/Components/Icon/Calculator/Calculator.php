<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Calculator;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Calculator extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.calculator.index');
    }
}
