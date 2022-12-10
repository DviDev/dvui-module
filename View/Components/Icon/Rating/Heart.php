<?php

namespace Modules\DvUi\View\Components\Icon\Rating;

use Illuminate\View\Component;
use Modules\DvUi\View\Components\Icon\Icon;

class Heart extends Icon
{
    use SizeTrait;


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.icon.rating.heart');
    }
}
