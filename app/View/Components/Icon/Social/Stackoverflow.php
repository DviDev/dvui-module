<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Social;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Stackoverflow extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/social/stackoverflow');
    }
}
