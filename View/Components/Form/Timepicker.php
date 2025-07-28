<?php

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Timepicker extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.form/timepicker');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormDatetimepicker;
    }
}
