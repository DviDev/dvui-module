<?php

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Datetimepicker extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.form/datetimepicker');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormDatetimepicker;
    }
}
