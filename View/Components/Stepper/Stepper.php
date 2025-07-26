<?php

namespace Modules\DvUi\View\Components\Stepper;

use DvUi\app\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Stepper extends Component
{
    use DevResources;
    public function render()
    {
        return view('dvui::components.stepper.index');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Stepper;
    }
}
