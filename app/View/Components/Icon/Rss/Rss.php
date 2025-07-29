<?php

namespace Modules\DvUi\View\Components\Icon\Rss;

use Illuminate\View\Component;
use Illuminate\View\View;

class Rss extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.rss.index');
    }
}
