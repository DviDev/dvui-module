<?php

namespace Modules\DvUi\View\Components\Icon\List;

use Illuminate\View\Component;
use Illuminate\View\View;

class Bullet extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/list/bullet');
    }
}
