<?php

namespace Modules\DvUi\View\Components\Offcanvas;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Button extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.offcanvas/button');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::OffcanvasButton;
    }
}
