<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Funnel;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Funnel extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.funnel.index');
    }
}
