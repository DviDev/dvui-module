<?php

namespace Modules\DvUi\View\Components\Form;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Date extends Component
{
    use DevResources;

    public function render(): View|string
    {
        return view('dvui::components.form/date');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormDate;
    }
}
