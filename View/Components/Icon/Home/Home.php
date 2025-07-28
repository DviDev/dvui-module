<?php

namespace Modules\DvUi\View\Components\Icon\Home;

use Illuminate\View\Component;
use Illuminate\View\View;

class Home extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.home.index');
    }
}
