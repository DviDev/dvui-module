<?php

namespace Modules\DvUi\View\Components\Icon\Cog;

use Illuminate\View\Component;
use Illuminate\View\View;

class Cog extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.cog.index');
    }
}
