<?php

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\Component;

class Datepicker extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public ?string $label = null, public ?string $id = null)
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
        return view('dvui::components.form/datepicker');
    }
}
