<?php

namespace Modules\DvUi\View\Components\Icon\Social;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;
use Modules\DvUi\View\Components\Icon\Rating\SizeTrait;

class Behance extends Icon
{
    use SizeTrait;

    public function render(): View
    {
        return view('dvui::components.icon/social/behance');
    }
}
