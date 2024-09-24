<?php

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\View;
use Modules\Base\View\Components\Form\BaseFormBladeComponent;

class Date extends BaseFormBladeComponent
{
    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('dvui::components.form/date');
    }
}
