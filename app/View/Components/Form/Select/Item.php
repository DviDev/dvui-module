<?php

namespace Modules\DvUi\View\Components\Form\Select;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Item extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.form/select/item');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormSelectItem;
    }
}
