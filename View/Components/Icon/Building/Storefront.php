<?php

namespace Modules\DvUi\View\Components\Icon\Building;

use Illuminate\View\Component;

class Storefront extends Component
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
        return view('dvui::components.icon.building.storefront');
    }
}
