<?php

namespace Modules\DvUi\View\Components\Icon;

use Illuminate\View\Component;

class Icon extends Component
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

    public function render()
    {
        return view('dvui::components.icon.index');
    }
}
