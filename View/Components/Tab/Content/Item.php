<?php

namespace Modules\DvUi\View\Components\Tab\Content;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Item extends Component
{
    use DevResources;
    public function render()
    {
        return view('dvui::components.tab.content.item');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::TabContentItem;
    }
}
