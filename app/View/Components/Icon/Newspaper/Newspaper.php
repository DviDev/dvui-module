<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Newspaper;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Newspaper extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.newspaper.index');
    }
}
