<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Backspace;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Backspace extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.backspace.index');
    }
}
