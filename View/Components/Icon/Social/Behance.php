<?php

namespace Modules\DvUi\View\Components\Icon\Social;

use Modules\DvUi\View\Components\Icon\Icon;
use Modules\DvUi\View\Components\Icon\Rating\SizeTrait;

class Behance extends Icon
{
    use SizeTrait;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.icon/social/behance');
    }
}
