<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Timeline\Item;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Header extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.timeline/item/header');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::TimelineItemHeader;
    }
}
