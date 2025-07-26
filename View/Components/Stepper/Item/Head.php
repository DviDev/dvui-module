<?php

namespace Modules\DvUi\View\Components\Stepper\Item;

use DvUi\app\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

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
