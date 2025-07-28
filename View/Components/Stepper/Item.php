<?php

namespace Modules\DvUi\View\Components\Stepper;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

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
