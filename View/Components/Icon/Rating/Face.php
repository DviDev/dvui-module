<?php

namespace Modules\DvUi\View\Components\Icon\Rating;

use Modules\DvUi\View\Components\Icon\Icon;

class Face extends Icon
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.icon.rating.face');
    }
}
