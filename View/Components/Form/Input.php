<?php

namespace Modules\DvUi\View\Components\Form;

use Modules\DvUi\View\BaseBladeComponent;

class Input extends BaseBladeComponent
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.form.input');
    }
}
