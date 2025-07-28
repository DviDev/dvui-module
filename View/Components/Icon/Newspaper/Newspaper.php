<?php

namespace Modules\DvUi\View\Components\Icon\Newspaper;

use Illuminate\View\Component;
use Illuminate\View\View;

class Newspaper extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.newspaper.index');
    }
}
