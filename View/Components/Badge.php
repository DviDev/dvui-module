<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;
use Modules\DvUi\Services\ComponentCheck;

class Badge extends Component
{
    use ComponentCheck;

    public function __construct() {}

    public function render()
    {
        return view('dvui::components.badge');
    }
}
