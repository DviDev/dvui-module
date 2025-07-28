<?php

namespace Modules\DvUi\View\Components\Tab;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Tab extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.tab.index');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Tab;
    }
}
