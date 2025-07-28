<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Services\ComponentCheck;
use Modules\DvUi\Traits\DevResources;

class Chips extends Component
{
    use ComponentCheck;
    use DevResources;

    public function render()
    {
        return view('dvui::components.chips');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Chips;
    }
}
