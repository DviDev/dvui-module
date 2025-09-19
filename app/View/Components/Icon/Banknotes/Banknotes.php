<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Banknotes;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Banknotes extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.banknotes.index');
    }
}
