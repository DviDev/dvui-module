<?php

namespace Modules\DvUi\View\Components\Dropdown;

use DvUi\app\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

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
