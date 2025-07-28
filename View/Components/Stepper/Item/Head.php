<?php

namespace Modules\DvUi\View\Components\Stepper\Item;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Head extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.stepper/item/head');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::StepperItemHead;
    }
}
