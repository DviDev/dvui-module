<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Shopping;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Bag extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/shopping/bag');
    }
}
