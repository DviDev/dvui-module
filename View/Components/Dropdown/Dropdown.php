<?php

namespace Modules\DvUi\View\Components\Dropdown;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Dropdown extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.dropdown/index');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Dropdown;
    }
}
