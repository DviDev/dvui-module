<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Briefcase;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Briefcase extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.briefcase.index');
    }
}
