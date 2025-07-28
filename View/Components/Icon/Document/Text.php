<?php

namespace Modules\DvUi\View\Components\Icon\Document;

use Illuminate\View\Component;
use Illuminate\View\View;

class Text extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public bool $outline = false, public bool $solid = true, public bool $mini = false)
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
        return view('dvui::components.icon/document/text');
    }
}
