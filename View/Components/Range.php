<?php

namespace Modules\DvUi\View\Components;

use DvUi\app\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Range extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.range');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Range;
    }
}
