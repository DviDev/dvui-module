<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Trash;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Solid extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.trash.solid');
    }
}
