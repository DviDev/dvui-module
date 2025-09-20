<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Identification;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Identification extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.identification.index');
    }
}
