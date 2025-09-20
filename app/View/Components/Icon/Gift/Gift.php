<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Gift;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Gift extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.gift.index');
    }
}
