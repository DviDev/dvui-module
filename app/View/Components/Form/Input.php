<?php

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\View\BaseBladeComponent;

class Input extends BaseBladeComponent
{
    public function render(): View
    {
        return view('dvui::components.form.input');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormInput;
    }
}
