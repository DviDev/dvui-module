<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Atsymbol;

use Illuminate\View\Component;
use Illuminate\View\View;

final class AtSymbol extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.atsymbol.index');
    }
}
