<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class CardIcon extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $title, public $icon)
    {
        //
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('dvui::components.card-icon');
    }
}
