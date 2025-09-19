<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\ReceiptPercent;

use Illuminate\View\Component;
use Illuminate\View\View;

final class ReceiptPercent extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.receiptpercent.index');
    }
}
