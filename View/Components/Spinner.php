<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Spinner extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.spinner');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Spinner;
    }
}
