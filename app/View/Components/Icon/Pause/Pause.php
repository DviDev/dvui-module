<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Pause;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Pause extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.pause.index');
    }
}
