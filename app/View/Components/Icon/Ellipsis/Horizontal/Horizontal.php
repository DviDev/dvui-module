<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Ellipsis\Horizontal;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Horizontal extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.ellipsis.horizontal.index');
    }
}
