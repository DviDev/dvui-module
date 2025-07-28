<?php

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Check extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.form/check');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormCheck;
    }
}
