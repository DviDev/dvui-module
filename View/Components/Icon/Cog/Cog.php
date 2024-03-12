<?php

namespace Modules\DvUi\View\Components\Icon\Cog;

use Illuminate\View\Component;

class Cog extends Component
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
        return view('dvui::components.icon.cog.index');
    }
}
