<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Modal extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.modal');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Modal;
    }
}
