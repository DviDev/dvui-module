<?php

namespace Modules\DvUi\View\Components\Form;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class FileInput extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.form/fileinput');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormFile;
    }
}
