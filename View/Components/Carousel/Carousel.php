<?php

namespace Modules\DvUi\View\Components\Carousel;

use Illuminate\View\Component;
use Modules\DvUi\Services\ComponentCheck;

class Carousel extends Component
{
    use ComponentCheck;

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
        return view('dvui::components.carousel.index');
    }
}
