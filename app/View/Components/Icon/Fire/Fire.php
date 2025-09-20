<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Fire;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Fire extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.fire.index');
    }
}
