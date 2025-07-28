<?php

namespace Modules\DvUi\View\Components\Dev;

use Illuminate\View\Component;
use Illuminate\View\View;

class Info extends Component
{
    public function render(): View|string
    {
        return view('dvui::components.dev.info');
    }
}
