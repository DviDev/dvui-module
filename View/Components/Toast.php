<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;

class Toast extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.toast');
    }
}
