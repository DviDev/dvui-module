<?php

namespace Modules\DvUi\View\Components\Stepper;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Stepper extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.stepper.index');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Stepper;
    }
}
