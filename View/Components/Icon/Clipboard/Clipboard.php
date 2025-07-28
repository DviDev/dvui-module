<?php

namespace Modules\DvUi\View\Components\Icon\Clipboard;

use Illuminate\View\Component;
use Illuminate\View\View;

class Clipboard extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.clipboard.index');
    }
}
