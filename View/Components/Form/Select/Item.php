<?php

namespace Modules\DvUi\View\Components\Form\Select;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Item extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.form/select/item');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormSelectItem;
    }
}
