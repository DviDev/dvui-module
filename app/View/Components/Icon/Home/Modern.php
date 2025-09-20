<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Home;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Modern extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/home/modern');
    }
}
