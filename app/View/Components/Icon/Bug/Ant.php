<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Bug;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Ant extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/bug/ant');
    }
}
