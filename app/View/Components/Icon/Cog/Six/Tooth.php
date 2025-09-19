<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Cog\Six;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Tooth extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/cog/six/tooth');
    }
}
