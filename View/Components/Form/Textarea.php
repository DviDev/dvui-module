<?php

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Textarea extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.form/textarea');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormTextarea;
    }
}
