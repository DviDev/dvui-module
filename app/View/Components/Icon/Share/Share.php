<?php

namespace Modules\DvUi\View\Components\Icon\Share;

use Illuminate\View\Component;
use Illuminate\View\View;

class Share extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.share.index');
    }
}
