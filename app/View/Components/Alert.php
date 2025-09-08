<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

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

    public function render(): View
    {
        return view('dvui::components.alert');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Alert;
    }
}
