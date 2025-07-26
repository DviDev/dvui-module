<?php

namespace Modules\DvUi\View\Components;

use DvUi\app\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Services\ComponentCheck;

class Badge extends Component
{
    use ComponentCheck;
    use DevResources;

    public function render()
    {
        return view('dvui::components.badge');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Badge;
    }
}
