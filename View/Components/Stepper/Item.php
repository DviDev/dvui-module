<?php

namespace Modules\DvUi\View\Components\Stepper;

use DvUi\app\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Item extends Component
{
    use DevResources;
    public function render()
    {
        return view('dvui::components.stepper/item');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::StepperItem;
    }
}
