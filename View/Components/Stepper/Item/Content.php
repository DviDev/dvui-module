<?php

namespace Modules\DvUi\View\Components\Stepper\Item;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Content extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.stepper/item/content');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::StepperItemContent;
    }
}
