<?php

namespace Modules\DvUi\View\Components\Button;

use DvUi\app\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\View\BaseBladeComponent;

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
