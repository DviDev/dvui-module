<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Toast extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.toast');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Toast;
    }
}
