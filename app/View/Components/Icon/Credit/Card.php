<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Credit;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Card extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/credit/card');
    }
}
