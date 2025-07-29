<?php

namespace Modules\DvUi\View\Components\Icon\Receipt;

use Illuminate\View\Component;
use Illuminate\View\View;

class Refund extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/receipt/refund');
    }
}
