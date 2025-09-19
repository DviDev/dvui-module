<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Hand\Thumb;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Up extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/hand/thumb/up');
    }
}
