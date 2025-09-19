<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Link;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Link extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.link.index');
    }
}
