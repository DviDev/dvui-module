<?php

namespace Modules\DvUi\View\Components\List\Group;

use Modules\DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Item extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.list/group/item');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ListGroupItem;
    }
}
