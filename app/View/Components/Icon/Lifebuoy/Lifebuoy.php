<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Lifebuoy;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Lifebuoy extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.lifebuoy.index');
    }
}
