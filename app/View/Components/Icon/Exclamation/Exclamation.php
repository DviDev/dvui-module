<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Exclamation;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Exclamation extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.exclamation.index');
    }
}
