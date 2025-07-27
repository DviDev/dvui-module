<?php

namespace Modules\DvUi\View\Components\Dropdown;

use Modules\DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Item extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.dropdown/item');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::DropdownItem;
    }
}
