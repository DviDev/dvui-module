<?php

namespace Modules\DvUi\View\Components\Form;

use Modules\DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class CheckSwitch extends Component
{
    use DevResources;
    public function render()
    {
        return view('dvui::components.form/switch');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormSwitch;
    }
}
