<?php

namespace Modules\DvUi\View\Components\Icon\ReceiptPercent;

use Illuminate\View\Component;
use Illuminate\View\View;

class ReceiptPercent extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.receiptpercent.index');
    }
}
