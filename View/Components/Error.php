<?php

namespace Modules\DvUi\View\Components;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Error extends Component
{
    use DevResources;
    public function render()
    {
        return view('dvui::components.error');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Error;
    }
}
