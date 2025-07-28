<?php

namespace Modules\DvUi\View\Components\Icon\ArquiveBox;

use Illuminate\View\Component;
use Illuminate\View\View;

class XMark extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render(): View
    {
        return view('dvui::components.icon/arquivebox/xmark');
    }
}
