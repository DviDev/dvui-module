<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\User;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Plus extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/user/plus');
    }
}
