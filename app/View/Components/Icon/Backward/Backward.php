<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Backward;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Backward extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.backward.index');
    }
}
