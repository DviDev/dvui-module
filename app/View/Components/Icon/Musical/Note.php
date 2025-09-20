<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Musical;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Note extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/musical/note');
    }
}
