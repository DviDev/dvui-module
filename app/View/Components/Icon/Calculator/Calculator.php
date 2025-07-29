<?php

namespace Modules\DvUi\View\Components\Icon\Calculator;

use Illuminate\View\Component;
use Illuminate\View\View;

class Calculator extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.calculator.index');
    }
}
