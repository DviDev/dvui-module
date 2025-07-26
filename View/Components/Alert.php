<?php

namespace Modules\DvUi\View\Components;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;

use Modules\DvUi\Enums\DvuiComponentAlias;
use function view;

class Alert extends Component
{
    use DevResources;

    public function __construct(
        public ?string $content = null,
        public bool $dismiss = false,
        public bool $blue = false,
        public bool $red = false,
        public bool $green = false,
        public bool $yellow = false,
        public bool $purple = false,
        public bool $indigo = false,
        public bool $gray = false,
    ) {}

    public function render()
    {
        return view('dvui::components.alert');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Alert;
    }
}
