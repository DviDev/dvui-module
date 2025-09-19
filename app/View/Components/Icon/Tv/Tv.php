<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Tv;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Tv extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.tv.index');
    }
}
