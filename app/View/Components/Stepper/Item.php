<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Stepper;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Item extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.stepper/item');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::StepperItem;
    }
}
