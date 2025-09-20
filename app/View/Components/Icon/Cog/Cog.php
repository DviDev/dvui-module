<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Cog;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Cog extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.cog.index');
    }
}
