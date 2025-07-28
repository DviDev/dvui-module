<?php

namespace Modules\DvUi\View\Components\Timeline\Item;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Header extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.timeline/item/header');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::TimelineItemHeader;
    }
}
