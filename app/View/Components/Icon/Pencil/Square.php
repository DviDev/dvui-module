<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Pencil;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Square extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/pencil/square');
    }
}
