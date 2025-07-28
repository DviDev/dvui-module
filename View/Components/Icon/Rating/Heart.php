<?php

namespace Modules\DvUi\View\Components\Icon\Rating;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

class Heart extends Icon
{
    use SizeTrait;

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('dvui::components.icon.rating.heart');
    }
}
