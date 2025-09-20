<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Stepper\Item;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Content extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.stepper/item/content');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::StepperItemContent;
    }
}
