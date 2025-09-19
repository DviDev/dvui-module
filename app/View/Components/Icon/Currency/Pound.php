<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Currency;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Pound extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/currency/pound');
    }
}
