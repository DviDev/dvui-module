<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Star;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Star extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.star.index');
    }
}
