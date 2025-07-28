<?php

namespace Modules\DvUi\View\Components\Timeline\Item;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Item extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.timeline.item.index');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::TimelineItem;
    }
}
