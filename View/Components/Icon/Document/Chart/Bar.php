<?php

namespace Modules\DvUi\View\Components\Icon\Document\Chart;

use Illuminate\View\Component;
use Illuminate\View\View;

class Bar extends Component
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
    public function render(): View
    {
        return view('dvui::components.icon/document/chart/bar');
    }
}
