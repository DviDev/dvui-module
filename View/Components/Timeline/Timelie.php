<?php

namespace Modules\DvUi\View\Components\Timeline;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Timelie extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.timeline.index');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Timeline;
    }
}
