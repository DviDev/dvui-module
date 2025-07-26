<?php

namespace Modules\DvUi\View\Components\Button;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\View\BaseBladeComponent;

class Group extends BaseBladeComponent
{
    public function render()
    {
        return view('dvui::components.button.group');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ButtonGroup;
    }
}
