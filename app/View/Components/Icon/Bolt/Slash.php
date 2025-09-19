<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Bolt;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Slash extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/bolt/slash');
    }
}
