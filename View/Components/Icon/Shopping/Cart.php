<?php

namespace Modules\DvUi\View\Components\Icon\Shopping;

use Illuminate\View\Component;
use Illuminate\View\View;

class Cart extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/shopping/cart');
    }
}
