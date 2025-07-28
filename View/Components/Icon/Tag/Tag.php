<?php

namespace Modules\DvUi\View\Components\Icon\Tag;

use Illuminate\View\Component;
use Illuminate\View\View;

class Tag extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.tag.index');
    }
}
