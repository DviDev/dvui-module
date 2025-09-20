<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Tab;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Item extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.tab/item');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::TabItem;
    }
}
