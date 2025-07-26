<?php

namespace Modules\DvUi\View\Components\Offcanvas;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

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
