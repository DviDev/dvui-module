<?php

namespace Modules\DvUi\View\Components\Timeline\Item;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Content extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.timeline/item/content');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::TimelineItemContent;
    }
}
