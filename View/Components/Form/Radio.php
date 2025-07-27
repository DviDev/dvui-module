<?php

namespace Modules\DvUi\View\Components\Form;

use Modules\DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Radio extends Component
{
    use DevResources;
    public function __construct(
        public string $name,
        public bool $checked = false,
        public ?string $label = null,
        public bool $primary = false,
        public bool $orange = false
    ) {}

    public function render()
    {
        return view('dvui::components.form.radio');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormRadio;
    }
}
