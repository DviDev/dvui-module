<?php

namespace Modules\DvUi\View\Components\Button;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Group extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.button.group');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ButtonGroup;
    }
}
