<?php

namespace Modules\DvUi\View\Components\Icon\Bookmark;

use Illuminate\View\Component;
use Illuminate\View\View;

class Bookmark extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.bookmark.index');
    }
}
