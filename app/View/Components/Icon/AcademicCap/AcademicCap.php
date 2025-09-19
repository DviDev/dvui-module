<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\AcademicCap;

use Illuminate\View\Component;
use Illuminate\View\View;

final class AcademicCap extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.academiccap.index');
    }
}
