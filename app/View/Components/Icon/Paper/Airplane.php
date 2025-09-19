<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Paper;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Airplane extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/paper/airplane');
    }
}
