<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Gif;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Gif extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.gif.index');
    }
}
