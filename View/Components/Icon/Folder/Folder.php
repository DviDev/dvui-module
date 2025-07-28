<?php

namespace Modules\DvUi\View\Components\Icon\Folder;

use Illuminate\View\Component;
use Illuminate\View\View;

class Folder extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.folder.index');
    }
}
