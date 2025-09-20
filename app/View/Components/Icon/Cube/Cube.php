<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Cube;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Cube extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.cube.index');
    }
}
