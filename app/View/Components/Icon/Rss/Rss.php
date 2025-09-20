<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Rss;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Rss extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.rss.index');
    }
}
