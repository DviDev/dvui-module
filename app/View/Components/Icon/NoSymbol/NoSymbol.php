<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\NoSymbol;

use Illuminate\View\Component;
use Illuminate\View\View;

final class NoSymbol extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.nosymbol.index');
    }
}
