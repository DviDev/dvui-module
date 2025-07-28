<?php

namespace Modules\DvUi\View\Components\Icon\Photo;

use Illuminate\View\Component;
use Illuminate\View\View;

class Photo extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.photo.index');
    }
}
