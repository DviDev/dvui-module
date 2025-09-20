<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Cake;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Cake extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.cake.index');
    }
}
