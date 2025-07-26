<?php

namespace Modules\DvUi\View\Components\Form\Select;

use DvUi\app\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

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
