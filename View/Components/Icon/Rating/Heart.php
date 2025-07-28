<?php

namespace Modules\DvUi\View\Components\Icon\Rating;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

class Heart extends Icon
{
    use SizeTrait;

    public function render(): View
    {
        return view('dvui::components.icon.rating.heart');
    }
}
