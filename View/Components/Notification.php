<?php

namespace Modules\DvUi\View\Components;

use DvUi\app\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Notification extends Component
{
    use DevResources;
    public function render()
    {
        return view('dvui::components.notification');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Notification;
    }
}
