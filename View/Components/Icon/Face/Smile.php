<?php

namespace Modules\DvUi\View\Components\Icon\Face;

use Illuminate\View\Component;

class Smile extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.icon/face/smile');
    }
}
