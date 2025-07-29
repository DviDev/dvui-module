<?php

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Field extends Component
{
    use DevResources;

    public function __construct(public ?string $label = null, public ?string $id = null, public array $attr = [])
    {
    }

    public function render(): View|string
    {
        return view('dvui::components.form/field');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormField;
    }
}
