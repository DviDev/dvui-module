<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Cursor\Arrow;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Rays extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.cursor.arrow.rays');
    }
}
