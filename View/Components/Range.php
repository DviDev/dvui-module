<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Range extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.range');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Range;
    }
}
