<?php

namespace Modules\DvUi\View\Components\Icon\List;

use Illuminate\View\Component;

class Bullet extends Component
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
        return view('dvui::components.icon/list/bullet');
    }
}
