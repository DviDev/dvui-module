<?php

namespace Modules\DvUi\View\Components\Icon\Menu;

use Illuminate\View\Component;
use Illuminate\View\View;

class Menu extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.menu.menu');
    }
}
