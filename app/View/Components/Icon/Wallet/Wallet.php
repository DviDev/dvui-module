<?php

namespace Modules\DvUi\View\Components\Icon\Wallet;

use Illuminate\View\Component;
use Illuminate\View\View;

class Wallet extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.wallet.index');
    }
}
