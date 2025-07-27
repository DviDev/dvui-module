<?php

namespace Modules\DvUi\View\Components;

use Modules\DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Toast extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.toast');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Toast;
    }
}
